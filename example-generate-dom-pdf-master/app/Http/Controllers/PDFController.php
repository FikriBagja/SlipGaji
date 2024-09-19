<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $image1 = file_get_contents('images/logo.png');
        $encoded_image1 = base64_encode($image1);
        $image2 = file_get_contents('images/garis.png');
        $encoded_image2 = base64_encode($image2);
        $image3 = file_get_contents('images/bulat.png');
        $encoded_image3 = base64_encode($image3);
        $users = User::get();

        $data = [
            'encoded_images' => [
            'logo' => $encoded_image1,
            'garis' => $encoded_image2,
            'bulat' => $encoded_image3,
        ],
            'title' => 'Example Generate PDF',
            'date' => date('m/d/Y'),
            'users' => $users,
            'rincian_gaji' => [
                'rincian' => [
                    'gaji_pokok' => 'Rp 0',
                    'bonus_tindakan' => 'Rp 0',
                    'bonus_pasien_baru' => 'Rp 0',
                    'bonus_upah_lembur' => 'Rp 0',
                ],
                'potongan' => [
                    'total_potongan' => '-Rp 32.250',
                    'keterangan' => 'PPH21',
                ],
                'tambahan' => [
                    'total_tambahan' => 'Rp 100.000',
                    'keterangan' => 'Bonus bulanan',
                ],
            ],
        ];

        $pdf = Pdf::loadView('pdf', $data);

        return $pdf->download('slip_gaji.pdf');
    }
}
