<?php


namespace Database\Seeders;


use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        // $limit = 10;
        // $categories = Category::all()->pluck('id')->toArray();
        // for ($i = 0; $i <= $limit; $i++) {
        //     DB::table('products')->insert([
        //         'name' => $faker->name,
        //         'link' => $faker->url,
        //         'star' => $faker->randomFloat(null, 0, 5),
        //         'description' => $faker->text(100),
        //         'price' => $faker->numberBetween(1,100),
        //         'image' => $faker->imageUrl(640, 480, 'clothes'),
        //         'category_id' => $faker->randomElement($categories),
        //         'number_in_shop' => $faker->numberBetween(1,10)
        //     ]);
        // }

        // Women Dress
        $dressCategoryId = Category::where('name', 'Đồ nữ')->first()->id;
        DB::table('products')->insert([
            [
                'name' => "Womens Olive Cape Sleeve Dress",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h3c/h18/15652627283998/A20ITISS205223G_GREEN.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Regular Fit Off Shoulder Embroidered Midi Dress",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hef/hb4/15710276321310/A20ZINKD01062_BLACK.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Ruffle Embellished Maxi",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h5e/hdd/15650005188638/A20ITISS205130P_PURPLE.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Assymetrical Shift Dress",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hb4/hca/15652047421470/A20ITISS205136G_GREEN.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Embroidered Shift Dress",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hd1/h1a/15652716806174/A20ITISS205107P_PINK.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Regular Fit Boat Neck Printed Midi Dress",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h9d/hf6/15710141284382/A20ZINKD01060_BLACK.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Floral Embroidered Maxi",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h12/h6d/15652073439262/A20ITISS205100P_PINK.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Floral Gathered Maxi",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hee/hce/15652043816990/A20ITISS205145N_NAVY.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Blue Flowy Maxi",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h04/hf5/15649661157406/A20ITIS212311BL_BLUE.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Womens Shimmer Cowl Dress",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Tạo vẻ ngoài thanh lịch bằng cách mặc bộ sưu tập trang phục phương Tây độc đáo này từ nhà Zink London. Được tạo ra để làm nổi bật bất kỳ kiểu cơ thể nào, nó sẽ mang lại cho bạn sự quyến rũ hơn và khiến bạn nổi bật ở bất cứ đâu khi mặc chiếc áo này. Chất liệu sản phẩm cũng chắc chắn giúp bạn luôn thoải mái suốt cả ngày. Kết hợp nó với những phụ kiện thời trang tối thiểu, và tất nhiên, đừng quên nở nụ cười xinh xắn của bạn!",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h62/h46/15652320247838/A20ITISS205086N_NAVY.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $dressCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ]
        ]);

        // Shoe
        $shoeCategoryId = Category::where('name', 'Giày')->first()->id;
        DB::table('products')->insert([
            [
                'name' => "PUMA",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Hãy tập thể dục thật phong cách bằng cách mang đôi giày thể thao này của Reebok và nhận được những lời khen ngợi cho sự lựa chọn của bạn. Được làm từ chất liệu chất lượng tốt, đảm bảo độ ôm tay tốt hơn, đồng thời ren lên cố định tạo sự thuận tiện khi mặc.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h1c/hd9/14192385294366/204500756_9212.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "CATWALK",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Sàn catwalk của Gothic. Trở Lại Thời Trang Với Những Đôi Bốt Có Gót Thường. Xu hướng đế Chunky, đế đệm trong đế khối PU, biến ngón chân rắn bằng sáng chế này trở thành một lựa chọn thích hợp! 100% Sản xuất tại Ấn Độ.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/ha3/h89/14459247820830/205936964_9212.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "REEBOK",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Gây ấn tượng với mọi người bằng sự lựa chọn giày dép của bạn bằng cách mang đôi giày thể thao này của Reebok. Nó đã được làm bằng vật liệu chất lượng tốt sẽ cung cấp cho bạn một kết thúc sang trọng. Hơn nữa, nó có kiểu dáng slip on tạo sự thuận tiện khi đeo.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hbb/h35/13834397450270/206261383_9308.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Mens Grey Athleisure Sports Range Walking Shoes",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Một sự pha trộn hoàn hảo giữa phong cách và sự thoải mái, đôi giày thể thao màu xám này của Red Tape là sản phẩm cần có cho những người đàn ông hiện đại. Có thiết kế kết cấu hợp thời trang và đế sành điệu, những chiếc áo ren này lý tưởng cho các buổi chạy bộ, đi bộ hoặc tập gym. Với phần trên bằng vải dệt, những đôi giày thể thao này bền, nhẹ và dễ bảo trì. Đế EVA (ethylene vinyl acetate) mang lại sự thoải mái nhẹ.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h2e/hcc/14624487931934/205314313_9204.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "ADIDAS",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Đế giữa IMEVA ánh sáng với lớp adiprene có thể nhìn thấy giúp bảo vệ khỏi các lực tác động có hại. Tiếp thêm sức mạnh cho buổi chạy của bạn với đôi giày thể thao này của Adidas, được thiết kế cho những người muốn tối đa hóa năng lượng và chuyển động trong suốt quá trình tập luyện cường độ cao. Nó có tính năng buộc ren lên, giúp bạn dễ mặc. Hơn nữa, nó đã được làm bằng chất liệu chất lượng tốt mang lại cảm giác cầm nắm chắc chắn.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hba/hc7/13243952726046/205811651_9204.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "SKECHERS",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Hãy làm cho vẻ ngoài của bạn trở nên đáng chú ý bằng cách mang đôi giày thể thao này của Skechers. Nó đã được làm bằng chất liệu chất lượng tốt, mang lại cho nó một lớp hoàn thiện tốt trong khi ren buộc lên tạo sự thuận tiện khi mặc. Bên cạnh đó, đôi giày thể thao này có độ bền cao, trọng lượng nhẹ và mang lại cảm giác thoải mái khi mang.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hf8/h29/14639348318238/206661105_9204.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "GUESS",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Ghi điểm cao trên bảng đồng hồ thời trang bằng cách đi đôi bốt này do thương hiệu nổi tiếng Guess giới thiệu cho bạn. Đặc trưng với phần mũi giày nhọn, đồng thời có khóa kéo tạo sự thuận tiện khi mang. Hơn nữa, nó có đế ngoài bằng cao su nhiệt dẻo sẽ cung cấp cho bạn lực kéo tối ưu.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/he9/h34/15715225468958/FLGUSGBYRNEB-PK_PINK.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "TRESMODE",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Bước vào một thế giới thoải mái với giày thể thao xỏ ngón The Noa Grey dành cho phụ nữ. Được làm từ chất liệu vải tổng hợp cao cấp, phần trên mềm mại và lý tưởng cho mùa gió chướng vì tính năng nhanh khô. Đế TPR chunky làm cho đôi này chắc chắn và lý tưởng cho những chuyến đi bộ dài. Mẹo phong cách- Kết hợp đôi giày thể thao này với một chiếc váy dài đến đầu gối để có vẻ ngoài dễ thương.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/hd6/h9c/14740554579998/206062924_9204.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "VS PACE Men Lace Up Sneakers",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Phong cách dễ dàng, ổn định với mọi bước đi. Đôi giày lấy cảm hứng từ bóng rổ này có phần da giống như trên với đường khâu - Trên 3 đường sọc ở một bên và đục lỗ 3 sọc ở mặt khác. Đế ngoài bằng cao su mang đến cho chúng một cái nhìn hoàn thiện. Thêm sức hút vào bộ sưu tập giày dép của bạn với đôi giày thể thao này của Adidas. Nó có một dây buộc lên giúp bạn mặc nó một cách dễ dàng. Bên cạnh đó, phần trên được chế tác từ da tổng hợp chất lượng cao mang lại độ hoàn thiện tốt, trong khi phần đế ngoài được làm bằng ethylene vinyl axetat mang lại cảm giác cầm nắm tốt hơn.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h5f/he0/13953555005470/206221824_9212.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ],
            [
                'name' => "Mens Leather Lace Up Oxfords",
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => "Nâng cao bộ sưu tập giày dép của bạn bằng cách thêm đôi oxfords này từ nhà Lee Cooper. Nó được làm thủ công từ da chất lượng tốt cho độ hoàn thiện tốt, trong khi đế ngoài bằng cao su nhiệt dẻo giúp chống trơn trượt. Trên hết, nó có một dây buộc để đảm bảo bạn vừa khít.",
                'price' => $faker->numberBetween(1,100),
                'image' => "https://sslimages.shoppersstop.com/sys-master/images/h78/h17/14503508377630/206701973_9212.jpg_2000Wx3000H?imgopt=off",
                'category_id' => $shoeCategoryId,
                'number_in_shop' => $faker->numberBetween(1,10)
            ]
        ]);
    }
}

