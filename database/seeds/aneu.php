<?php

use Illuminate\Database\Seeder;

class aneu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        	[
'nis'=>'123456','nama_siswa'=>'serli','alamat'=>'Soekarno hatta','tempat_lahir'=>'Bandung','cita_cita'=>'Chef','tanggal_lahir'=>'1999-01-01','hobi'=>'memasak','foto'=>'1.jpg'
            ],
            [
'nis'=>'654321','nama_siswa'=>'sekar','alamat'=>'Baleendah','tempat_lahir'=>'Bandung','cita_cita'=>'Bidan','tanggal_lahir'=>'1999-02-02','hobi'=>'Berenang','foto'=>'2.jpg'
            ],
            [
'nis'=>'135791','nama_siswa'=>'Ririn','alamat'=>'Jelekong','tempat_lahir'=>'Bandung','cita_cita'=>'polwan','tanggal_lahir'=>'1999-03-03','hobi'=>'bernyanyi','foto'=>'6.jpg'
            ],
            [
'nis'=>'246810','nama_siswa'=>'Herdi','alamat'=>'Kiara condong','tempat_lahir'=>'Bandung','cita_cita'=>'Polisi','tanggal_lahir'=>'1999-04-04','hobi'=>'Bermain Bola','foto'=>'7.jpg'
            ],
            [
'nis'=>'246810','nama_siswa'=>'Yusuf','alamat'=>'Dayeuhkolot','tempat_lahir'=>'Bandung','cita_cita'=>'TNI','tanggal_lahir'=>'1999-04-04','hobi'=>'Berenang','foto'=>'8.jpg'
            ],
        ];
        DB::table('syanes')->insert($a);

    }
}
