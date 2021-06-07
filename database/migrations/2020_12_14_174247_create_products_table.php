<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar');
            $table->longText('description');
            $table->string('img')->nullable()->default();


            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();

        });


        DB::table('products')->insert([
            #for category id =>  1  => Electronics
            ['name'=>'Computers & Accessories','name_ar'=>'أجهزة الكمبيوتر وملحقاتها','description'=>'no description','category_id'=>'1'],
            ['name'=>'Portable Audio & Video','name_ar'=>'أجهزة الصوت والفيديو المحمولة','description'=>'no description','category_id'=>'1'],
            ['name'=>'Wearable Technology
','name_ar'=>'التقنية التي يمكن لباسها','description'=>'no description','category_id'=>'1'],
            ['name'=>'Televisions & Video Products
','name_ar'=>'التلفزيونات ومنتجات الفيديو','description'=>'no description','category_id'=>'1'],
            ['name'=>'Home Audio & Theater','name_ar'=>'الصوت المنزلي والمسرح','description'=>'no description','category_id'=>'1'],
            ['name'=>'Another Products','name_ar'=>'منتاجات اخرى ','description'=>'no description','category_id'=>'1'],
            #for category id => 2  => Clothing, Shoes & Jewelry
            ['name'=>'Women','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Men','name_ar'=>'رجال','description'=>'no description','category_id'=>'2'],
            ['name'=>'Girls','name_ar'=>'الفتيات','description'=>'no description','category_id'=>'2'],
            ['name'=>'Boys','name_ar'=>'أولاد','description'=>'no description','category_id'=>'2'],
            ['name'=>'Baby','name_ar'=>'طفل','description'=>'no description','category_id'=>'2'],
            ['name'=>'Novelty & More','name_ar'=>'الجدة والمزيد','description'=>'no description','category_id'=>'2'],
            ['name'=>'Luggage & Travel Gear','name_ar'=>'الأمتعة ومعدات السفر','description'=>'no description','category_id'=>'2'],
            ['name'=>'Uniforms, Work & Safety','name_ar'=>'الزي الرسمي والعمل والسلامة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Costumes & Accessories','name_ar'=>'الأزياء والاكسسوارات','description'=>'no description','category_id'=>'2'],
            ['name'=>'Shoe, Jewelry & Watch','name_ar'=>'حذاء ومجوهرات وساعة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Accessories','name_ar'=>'مكملات','description'=>'no description','category_id'=>'2'],
            #for category id => 3  => Baby
            ['name'=>'Activity & Entertainment','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Apparel & Accessories','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Baby & Toddler Toys','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Baby Care','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Baby Stationery','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Car Seats & Accessories','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Diapering','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Feeding','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Gifts','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Nursery','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Potty Training','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Pregnancy & Maternity','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Pregnancy & Maternity','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Safety','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Strollers & Accessories','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Travel Gear','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            #for category id => 4  => Computer
            ['name'=>'Computer Accessories & Peripherals','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Computer Components','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Computers & Tablets','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Data Storage','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'External Components','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Laptop Accessories','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Monitors','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Networking Products','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Power Strips & Surge Protectors','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Printers','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Scanners','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Servers','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Tablet Accessories','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Tablet Replacement Parts','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],
            ['name'=>'Warranties & Services','name_ar'=>'امرأة','description'=>'no description','category_id'=>'2'],



        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
