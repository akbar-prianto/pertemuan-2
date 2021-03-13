<! DOCTYPE html >
< html >
< kepala >
	< title > Membuat Kalkulator Sederhana Dengan PHP </ title >
</ head >
< body >
<? php 
	if ( isset ( $ _GET [ 'hitung' ]))
		{
			$ bil1 = $ _GET [ 'bil1' ];
			$ bil2 = $ _GET [ 'bil2' ];
			$ operasi = $ _GET [ 'operasi' ];

			saklar ( $ operasi )
			{
				kasus  'tambah' :
					echo  $ hasil = $ bil1 + $ bil2 ;
				istirahat ;
				kasus  'kurang' :
					echo  $ hasil = $ bil1 - $ bil2 ;
				istirahat ;
				kasus  'kali' :
					echo  $ hasil = $ bil1 * $ bil2 ;
				istirahat ;
				case  'bagi' :
					echo  $ hasil = $ bil1 / $ bil2 ;
				istirahat ;			
		}
	}
?>
		< h2  class = " judul " > KALKULATOR </ h2 >
		< form  action = " testing.php " method = " get " >		
			< input  type = " text " name = " bil1 " placeholder = " nomer 1 " >
				< select  class = " opt " name = " operasi " >
					< Option  value = " Tambah " > + </ option >
					< option  value = " kurang " > - </ option >
					< option  value = " kali " > x </ option >
					< option  value = " bagi " > / </ option >
		</ pilih >
    		< input  type = " text " name = " bil2 " placeholder = " nomer 2 " >
				< button  type = " hitung " name = " hitung " > hasil </ button >
		</ formulir >
		< Br >
    	< p > Hasilnya: </ p >
</ body >
</ html >