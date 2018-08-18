<?php

use Illuminate\Database\Seeder;
use VentasApp\Productos;

class productosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Productos = [
           	['nombre'=> 'CUARTO LAGER XX', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>145,'P25'=>90,'P29'=>86,'P30'=>85,'P35'=>79,'P40'=>73],
			['nombre'=> 'CUARTO SOL', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>135,'P25'=>101,'P29'=>96,'P30'=>94,'P35'=>88,'P40'=>81],
			['nombre'=> 'CUARTO TKT LIGHT', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>135,'P25'=>82,'P29'=>78,'P30'=>77,'P35'=>71,'P40'=>66],
			['nombre'=> 'CUARTO INDIO', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>135,'P25'=>101,'P29'=>96,'P30'=>94,'P35'=>88,'P40'=>81],
			['nombre'=> 'LITRO SUPERIOR', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>312,'P25'=>234,'P29'=>221,'P30'=>218,'P35'=>203,'P40'=>187],
			['nombre'=> 'LITRO HEINEKEN', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>346,'P25'=>315,'P29'=>298,'P30'=>294,'P35'=>273,'P40'=>252],
			['nombre'=> 'LITRO SOL', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>336,'P25'=>252,'P29'=>238,'P30'=>235,'P35'=>218,'P40'=>201],
			['nombre'=> 'LITRO TKT LIGHT', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>297,'P25'=>243,'P29'=>230,'P30'=>227,'P35'=>211,'P40'=>194],
			['nombre'=> 'LITRO TKT ROJA', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>297,'P25'=>243,'P29'=>230,'P30'=>227,'P35'=>211,'P40'=>194],
			['nombre'=> 'LITRO INDIO', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>324,'P25'=>243,'P29'=>230,'P30'=>227,'P35'=>211,'P40'=>194],
			['nombre'=> 'MEGA LAGER XX', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>364,'P25'=>270,'P29'=>259,'P30'=>255,'P35'=>237,'P40'=>219],
			['nombre'=> 'MEGA SUPERIOR', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>372,'P25'=>242,'P29'=>229,'P30'=>227,'P35'=>210,'P40'=>194],
			['nombre'=> 'MEGA TKT LIGHT', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>396,'P25'=>253,'P29'=>240,'P30'=>236,'P35'=>220,'P40'=>204],
			['nombre'=> 'MEGA TKT ROJA', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>396,'P25'=>253,'P29'=>240,'P30'=>236,'P35'=>220,'P40'=>204],
			['nombre'=> 'MEGA INDIO', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>396,'P25'=>297,'P29'=>281,'P30'=>277,'P35'=>257,'P40'=>237],
			['nombre'=> 'MEGA SOL', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>396,'P25'=>253,'P29'=>240,'P30'=>236,'P35'=>220,'P40'=>204],
			['nombre'=> 'LATA TKT LIGHT', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>312,'P25'=>234,'P29'=>221,'P30'=>218,'P35'=>203,'P40'=>187],
			['nombre'=> 'LATA TKT ROJA', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>312,'P25'=>234,'P29'=>221,'P30'=>218,'P35'=>203,'P40'=>187],
			['nombre'=> 'LATA SOL', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>312,'P25'=>234,'P29'=>221,'P30'=>218,'P35'=>203,'P40'=>187],
			['nombre'=> 'LATA SUPERIOR', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>264,'P25'=>198,'P29'=>187,'P30'=>185,'P35'=>171,'P40'=>158],
			['nombre'=> 'LATA LAGER XX', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>336,'P25'=>252,'P29'=>241,'P30'=>238,'P35'=>222,'P40'=>204],
			['nombre'=> 'LATON SOL', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>384,'P25'=>288,'P29'=>272,'P30'=>269,'P35'=>250,'P40'=>230],
			['nombre'=> 'LATON TKT LIGHT', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>384,'P25'=>288,'P29'=>272,'P30'=>269,'P35'=>249,'P40'=>230],
			['nombre'=> 'LATON TKT ROJA', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>384,'P25'=>288,'P29'=>272,'P30'=>269,'P35'=>249,'P40'=>230],
			['nombre'=> 'LATON INDIO', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>384,'P25'=>288,'P29'=>272,'P30'=>269,'P35'=>249,'P40'=>230],
			['nombre'=> 'LATON LAGER XX', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>408,'P25'=>306,'P29'=>294,'P30'=>290,'P35'=>269,'P40'=>249],
			['nombre'=> 'LATON SOL MICHELADA', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>432,'P25'=>324,'P29'=>307,'P30'=>302,'P35'=>280,'P40'=>259],
			['nombre'=> 'LATON SOL CHELADA', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>432,'P25'=>324,'P29'=>307,'P30'=>302,'P35'=>280,'P40'=>259],
			['nombre'=> 'LATON SOL CLAMATO', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>432,'P25'=>324,'P29'=>307,'P30'=>302,'P35'=>280,'P40'=>250],
			['nombre'=> 'LATON HEINEKEN', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>420,'P25'=>315,'P29'=>298,'P30'=>294,'P35'=>273,'P40'=>252],
			['nombre'=> 'BELLA LAGER XX', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>360,'P25'=>270,'P29'=>259,'P30'=>255,'P35'=>237,'P40'=>219],
			['nombre'=> 'BELLA BOHEMIA CLARA', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>396,'P25'=>297,'P29'=>285,'P30'=>277,'P35'=>257,'P40'=>237],
			['nombre'=> 'BELLA BOHEMIA OSCURA', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>396,'P25'=>297,'P29'=>285,'P30'=>277,'P35'=>257,'P40'=>237],
			['nombre'=> 'BELLA CARTA BLANCA', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>276,'P25'=>243,'P29'=>243,'P30'=>243,'P35'=>243,'P40'=>243],
			['nombre'=> 'BELLA COORS LIGHT', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>324,'P25'=>243,'P29'=>230,'P30'=>226,'P35'=>210,'P40'=>194],
			['nombre'=> 'BELLA INDIO', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>336,'P25'=>252,'P29'=>238,'P30'=>235,'P35'=>218,'P40'=>201],
			['nombre'=> 'BELLA SOL', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>336,'P25'=>252,'P29'=>238,'P30'=>235,'P35'=>218,'P40'=>201],
			['nombre'=> 'BELLA HEINEKEN', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>371.5,'P25'=>315,'P29'=>298,'P30'=>294,'P35'=>273,'P40'=>252],
			['nombre'=> 'BELLA LAGER AMBAR XX', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>353,'P25'=>261,'P29'=>250,'P30'=>248,'P35'=>230,'P40'=>209],
			['nombre'=> 'MEDIA BOHEMIA OSCURA', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>168,'P25'=>126,'P29'=>119,'P30'=>117,'P35'=>109,'P40'=>101],
			['nombre'=> 'MEDIA BOHEMIA CLARA', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>168,'P25'=>126,'P29'=>119,'P30'=>117,'P35'=>109,'P40'=>101],
			['nombre'=> 'MEDIA TKT ROJA', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>230,'P25'=>175,'P29'=>163,'P30'=>161,'P35'=>149,'P40'=>138],
			['nombre'=> 'MEDIA TKT LIGHT', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>230,'P25'=>175,'P29'=>163,'P30'=>161,'P35'=>149,'P40'=>138],
			['nombre'=> 'MEDIA LAGER XX', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>300,'P25'=>225,'P29'=>216,'P30'=>213,'P35'=>198,'P40'=>183],
			['nombre'=> 'MEDIA INDIO', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>230,'P25'=>175,'P29'=>163,'P30'=>161,'P35'=>149,'P40'=>138],
			['nombre'=> 'MEDIA LAGER AMBAR XX', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>250,'P25'=>187,'P29'=>180,'P30'=>177,'P35'=>165,'P40'=>152],
			['nombre'=> 'MEDIA SOL', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>276,'P25'=>207,'P29'=>196,'P30'=>193,'P35'=>179,'P40'=>165],
			['nombre'=> 'MEDIA SUPERIOR', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>252,'P25'=>189,'P29'=>179,'P30'=>176,'P35'=>164,'P40'=>151],
			['nombre'=> 'STRONG BROW FRESA', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>370.77,'P25'=>0,'P29'=>0,'P30'=>0,'P35'=>0,'P40'=>0],
			['nombre'=> 'STRONG BROWN MIEL', 'descripcion'=> ' ','Umedida'=>'Caja','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>370.77,'P25'=>0,'P29'=>0,'P30'=>0,'P35'=>0,'P40'=>0],
			['nombre'=> 'LATON SAL Y LIMON', 'descripcion'=> ' ','Umedida'=>'Charola','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>0,'P25'=>0,'P29'=>0,'P30'=>0,'P35'=>0,'P40'=>0],
			['nombre'=> 'COCA 3LT', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'1', 'precio' =>208,'P25'=>208,'P29'=>208,'P30'=>208,'P35'=>208,'P40'=>500],
			['nombre'=> 'COCA 600ML', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'1', 'precio' =>238,'P25'=>238,'P29'=>238,'P30'=>238,'P35'=>238,'P40'=>238],
			['nombre'=> 'CIGARROS MARLBORO', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'1', 'precio' =>520,'P25'=>520,'P29'=>520,'P30'=>520,'P35'=>520,'P40'=>520],
			['nombre'=> 'SABRITAS C/60', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'1', 'precio' =>522,'P25'=>522,'P29'=>522,'P30'=>522,'P35'=>522,'P40'=>522],
			['nombre'=> 'SABRITAS C/70', 'descripcion'=> ' ','Umedida'=>'Paquete','stock'=>0,'ExcentoDescuento'=>'1', 'precio' =>643,'P25'=>643,'P29'=>643,'P30'=>643,'P35'=>643,'P40'=>643],
			['nombre'=> 'IMPORTES', 'descripcion'=> ' ','Umedida'=>'','stock'=>0,'ExcentoDescuento'=>'0', 'precio' =>78,'P25'=>78,'P29'=>78,'P30'=>78,'P35'=>78,'P40'=>78],
       ];
       Productos::insert($Productos);
    }
}
