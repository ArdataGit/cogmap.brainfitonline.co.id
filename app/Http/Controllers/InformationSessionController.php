<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class InformationSessionController extends Controller
{
    public function send(Request $request)
    {
        try {
            $request->validate([
                'nama_orang_tua'  => 'required|string|max:100',
                'nomor_whatsapp'  => 'required|string|max:20',
                'email'           => 'required|email',
                'nama_anak'       => 'required|string|max:100',
                'usia_anak'       => 'required|string|max:10',
                'area'            => 'nullable|string|max:50',
            ]);

            $data = [
                'nama_orang_tua' => $request->nama_orang_tua,
                'nomor_whatsapp' => $request->nomor_whatsapp,
                'email'          => $request->email,
                'nama_anak'      => $request->nama_anak,
                'usia_anak'      => $request->usia_anak,
                'area'           => $request->area,
            ];

            $adminEmail = 'ayu.brainfit@gmail.com';

            Mail::send('emails.information_session', $data, function($message) use ($data, $adminEmail){
                $message->to($adminEmail)
                        ->subject('Ada Data Baru Cogmap');
            });

            return response()->json([
                'status'  => 'success',
                'message' => 'Data berhasil dikirim! Kami akan segera menghubungi Anda.',
                'redirect' => route('thank.you'),
            ], 200);

        } catch (\Exception $e) {
            Log::error('Gagal mengirim email Information Session', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.',
            ], 500);
        }
    }
}