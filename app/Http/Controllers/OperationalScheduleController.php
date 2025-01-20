<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class OperationalScheduleController extends Controller
{
    public function getSchedule()
    {
        $currentDate = Carbon::now();
        $month = $currentDate->format('F');
        $year = $currentDate->year;
        
        // Mendapatkan jumlah hari dalam bulan ini
        $daysInMonth = $currentDate->daysInMonth;
        
        // Mendapatkan hari pertama bulan ini
        $firstDayOfMonth = Carbon::create($year, $currentDate->month, 1);
        $startingDay = $firstDayOfMonth->dayOfWeek;
        
        // Hari libur (Sabtu dan Minggu)
        $holidays = [];
        for ($i = 1; $i <= $daysInMonth; $i++) {
            $date = Carbon::create($year, $currentDate->month, $i);
            if ($date->isSaturday() || $date->isSunday()) {
                $holidays[] = $i;
            }
        }
        
        // Tambahkan hari libur nasional
        $nationalHolidays = $this->getNationalHolidays($currentDate->month, $year);
        $holidays = array_merge($holidays, $nationalHolidays);
        
        // Menghilangkan duplikat jika ada
        $holidays = array_unique($holidays);
        sort($holidays);
        
        return response()->json([
            'month' => $this->getIndonesianMonth($month),
            'year' => $year,
            'daysInMonth' => $daysInMonth,
            'startingDay' => $startingDay,
            'holidays' => $holidays
        ]);
    }
    
    private function getNationalHolidays($month, $year)
    {
        // Data hari libur nasional 2025
        $holidays = [
            1 => [1,27,28,29],      // Januari: Tahun Baru Masehi
            2 => [1],      // Februari: Tahun Baru Imlek 2576 Kongzili
            // 3 => [25],     // Maret: Isra Mikraj Nabi Muhammad SAW
            3 => [28],     // Maret: Hari Raya Nyepi Tahun Baru Saka 1947
            3 => [29, 30, 31], // Maret: Jumat Agung, Sabtu Suci
            4 => [1,2,3,4,7,18],      // April: Hari Paskah
            // 4 => [12],     // April: Hari Raya Idul Fitri 1446 Hijriah
            5 => [1],      // Mei: Hari Buruh Internasional
            5 => [12,13],      // Mei: Kenaikan Isa Al Masih
            5 => [29,30],     // Mei: Hari Raya Waisak 2569 BE
            6 => [1,6,9],      // Juni: Hari Lahir Pancasila
            6 => [27],     // Juni: Hari Raya Idul Adha 1446 Hijriah
            // 7 => [7],      // Juli: Tahun Baru Islam 1447 Hijriah
            // 8 => [17],     // Agustus: Hari Kemerdekaan RI
            9 => [5],     // September: Maulid Nabi Muhammad SAW
            12 => [25, 26] // Desember: Hari Raya Natal dan Cuti Bersama
        ];
        
        // Menggabungkan semua tanggal libur untuk bulan yang diminta
        $monthHolidays = [];
        if (isset($holidays[$month])) {
            foreach ($holidays[$month] as $day) {
                $monthHolidays[] = $day;
            }
        }
        
        return $monthHolidays;
    }
    
    private function getIndonesianMonth($month)
    {
        $months = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];
        
        return $months[$month];
    }
} 