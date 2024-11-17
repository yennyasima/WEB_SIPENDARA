<?php

namespace App\Http\Controllers\Guest;

use App\Models\KasusHiv;
use App\Models\SuhuIspa;
use App\Models\HotspotHiv;
use App\Models\FaskesPdpHiv;
use Illuminate\Http\Request;
use App\Models\TunaSusilaHiv;
use App\Models\CurahHujanIspa;
use App\Models\KelembapanIspa;
use App\Models\DataPenyakitDbd;
use App\Models\DataPenyakitIspa;
use App\Models\WilayahRentanHiv;
use App\Models\PendudukMiskinHiv;
use App\Models\FaktorLingkunganDbd;
use App\Http\Controllers\Controller;
use App\Models\KepadatanPendudukDbd;
use App\Models\KepadatanPendudukIspa;
use App\Models\LokasiRawanTunaSusilaHiv;
use App\Models\PendudukPriaProduktivHiv;

class PetaController extends Controller
{

    public function index()
    {
        $kepadatanPendudukDbd = KepadatanPendudukDbd::distinct()->orderBy('tanggal', 'desc')->get('tanggal');
        $kepadatanPendudukDbdYear = $kepadatanPendudukDbd->map(function ($item) {
            return substr($item->tanggal, 0, 4);
        })->unique()->values();

        $faktorLingkunganDbd = FaktorLingkunganDbd::distinct()->orderBy('tanggal', 'desc')->get('tanggal');
        $faktorLingkunganDbdDate = [];
        foreach ($faktorLingkunganDbd as $item) {
            $year = substr($item->tanggal, 0, 4);
            $month = (int) substr($item->tanggal, 5, 2);

            if (!array_key_exists($year, $faktorLingkunganDbdDate)) {
                $faktorLingkunganDbdDate[$year] = [$month];
            } else {
                $faktorLingkunganDbdDate[$year][] = $month;
            }
        }

        $kasusDbd = DataPenyakitDbd::distinct()->orderBy('tanggal', 'desc')->get('tanggal');
        $kasusDbdDate = [];

        foreach ($kasusDbd as $item) {
            $year = substr($item->tanggal, 0, 4);
            $month = (int) substr($item->tanggal, 5, 2);

            if (!array_key_exists($year, $kasusDbdDate)) {
                $kasusDbdDate[$year] = [$month];
            } else {
                array_push($kasusDbdDate[$year], $month);
            }
        }

        return view('layouts.peta', [
            'kasusDbdDate' => $kasusDbdDate,
            'kepadatanPendudukDbdDate' => $kepadatanPendudukDbdYear,
            'faktorLingkunganDbdDate' => $faktorLingkunganDbdDate
        ]);
    }

    public function filterPeta(Request $request)
    {
        $mapSetting = json_decode($request->input('map_setting'), true);

        $response = [];
        if (array_key_exists('faskes', $mapSetting)) {
            $data = FaskesPdpHiv::all();
            $response['faskes'] = $data;
        }

        if (array_key_exists('kepadatan_penduduk', $mapSetting)) {
            $years = $mapSetting['kepadatan_penduduk'];

            $data = KepadatanPendudukDbd::where(function ($query) use ($years) {
                foreach ($years as $year) {
                    $query->orWhereYear('tanggal', $year);
                }
            })->get();

            $response['kepadatan_penduduk'] = $data;
        }

        if (array_key_exists('kasus_dbd', $mapSetting)) {
            $yearsList = $mapSetting['kasus_dbd'];

            $data = DataPenyakitDbd::where(function ($query) use ($yearsList) {
                foreach ($yearsList as $year => $months) {
                    foreach ($months as $month) {
                        $query->orWhere(function ($query) use ($year, $month) {
                            $query->whereYear('tanggal', $year)
                                ->whereMonth('tanggal', $month);
                        });
                    }
                }
            })->get();

            $response['kasus_dbd'] = $data;
        }

        if (array_key_exists('curah_hujan', $mapSetting)) {
            $yearsList = $mapSetting['curah_hujan'];

            $data = FaktorLingkunganDbd::where(function ($query) use ($yearsList) {
                foreach ($yearsList as $year => $months) {
                    foreach ($months as $month) {
                        $query->orWhere(function ($query) use ($year, $month) {
                            $query->whereYear('tanggal', $year)
                                ->whereMonth('tanggal', $month);
                        });
                    }
                }
            })->get();

            $response['curah_hujan'] = $data;
        }

        if (array_key_exists('kelembapan', $mapSetting)) {
            $yearsList = $mapSetting['kelembapan'];

            $data = FaktorLingkunganDbd::where(function ($query) use ($yearsList) {
                foreach ($yearsList as $year => $months) {
                    foreach ($months as $month) {
                        $query->orWhere(function ($query) use ($year, $month) {
                            $query->whereYear('tanggal', $year)
                                ->whereMonth('tanggal', $month);
                        });
                    }
                }
            })->get();

            $response['kelembapan'] = $data;
        }

        if (array_key_exists('suhu', $mapSetting)) {
            $yearsList = $mapSetting['suhu'];

            $data = FaktorLingkunganDbd::where(function ($query) use ($yearsList) {
                foreach ($yearsList as $year => $months) {
                    foreach ($months as $month) {
                        $query->orWhere(function ($query) use ($year, $month) {
                            $query->whereYear('tanggal', $year)
                                ->whereMonth('tanggal', $month);
                        });
                    }
                }
            })->get();

            $response['suhu'] = $data;
        }

        return response()->json($response);
    }
}
