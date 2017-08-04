<?php

use Illuminate\Database\Seeder;

class ServiceItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Modern Living Room',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'detail' => '<p>Price<strong>$480</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Old Style Dinning Room',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'detail' => '<p>Price<strong>$300</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Wood Style Interior',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'detail' => '<p>Price<strong>$500</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817676/Content/IMAGE%20FLOORING-MERK%20TACO/TACO_-_MAIN_IMAGE.png',
          'name' => 'Taco: Nature Amplified (Wood Patterns)',
          'description' => 'Heavy duty luxury vinyl planks from TACO Flooring, bringing confort eith four excellent benefits: Water-proof,Termite-proof, Noise Reduction and Easy Maintainance.',
          'detail' => '<p>Lapisan <strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p><p>Thickness <strong>3 mm</strong></p><p>Wearlayer <strong>0.2 mm</strong></p><p>Dimention <strong>152.4 mm x 914.4 mm</strong></p><p>1 Box <strong>3.34 m² (24 Planks)</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817676/Content/IMAGE%20FLOORING-MERK%20TACO/TACO_-_MAIN_IMAGE2.png',
          'name' => 'Taco: Nature Amplified (Stone Patterns)',
          'description' => 'Heavy duty luxury vinyl planks from TACO Flooring, bringing confort eith four excellent benefits: Water-proof,Termite-proof, Noise Reduction and Easy Maintainance.',
          'detail' => '<p>Lapisan <strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p><p>Thickness <strong>3 mm</strong></p><p>Wearlayer <strong>0.2 mm</strong></p><p>Dimention <strong>304.8 mm x 609.6 mm</strong></p><p>1 Box <strong>3.34 m² (18 Planks)</strong></p><p>Harga <strong>Rp 525.000,-/ 3m²</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817648/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/OZORA-MAIN_PICTURE.jpg',
          'name' => 'JB-Vinyl: Natural, Elegance, Beauty, Style',
          'description' => 'Can prevent the cold from the floor, easy to clean and durable, motif image dous not fade, can be used in all the rooms (dloor/wall),there are variety of motifs and colors, can adjust the room temperature hot and cold.',
          'detail' => '<p>Lapisan <strong>Wear Layer, Pattern Layer, Substrate Layer, Backing Layer.</strong></p><p>Dimention change of heating <strong>Unit:mm; Measurement: MD – 0.18  & CD + 0.10</strong></p><p>Leri of water absorption <strong>Measurement: MD – 0.10  & CD + 0.07</strong></p><p>Ratio of swelling <strong>Unit: 20ºC; Measurement: 0.47 x 10ºC</strong></p><p>Indentation <strong>Unit: 40ºC; Measurement: 0.12 mm & 0.25 mm</strong></p><p>Lost of heating <strong>Measurement: bellow 0.10</strong></p><p>Light resistance <strong>Measurement: 3-4 Class</strong></p><p>Ressilience <strong>Measurement: Good</strong></p><p>Critical Radiant Fluse <strong>Measurement: 0.45 Watts/cm³</strong></p><p>Size <strong>186 x 920 x 3 mm</strong></p><p>Sheet <strong>18 Sheet</strong></p><p>Harga <strong>Rp 388.000,-/ 3m²</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817648/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/OZORA-MAIN_PICTURE.jpg',
          'name' => 'Ozora: Natural Vinyl Floor and Wall ',
          'description' => 'Prevent cold from the loor, durable and easy to clean, fade resistance for motif image,luxury at floor and wall, variety motifs and colors, can adjust the room temperature hot and cold.',
          'detail' => '<p>Lapisan <strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer </strong></p><p>Dimention change of heating <strong>Unit:mm; Measurement: MD – 0.18  & CD + 0.10</strong></p><p>Leri of water absorption <strong>Measurement: MD – 0.10  & CD + 0.07</strong></p><p>Ratio of swelling <strong>Unit: 20ºC; Measurement: 0.47 x 10ºC</strong></p><p>Indentation <strong>Unit: 40ºC; Measurement: 0.12 mm & 0.25 mm</strong></p><p>Lost of heating <strong>Measurement: bellow 0.10</strong></p><p>Light resistance <strong>Measurement: 3-4 Class</strong></p><p>Ressilience <strong>Measurement: Good</strong></p><p>Critical Radiant Fluse <strong>Measurement: 0.45 Watts/cm³</strong></p><p>1 Box <strong>3.10 m² (18 Planks)</strong></p><p>Harga <strong>Rp 388.000,-/ 3m²</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind1.png',
          'name' => 'Interior Blind: Roller Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-shadow_blind1.png',
          'name' => 'Interior Blind: Shadows Blind',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_shades_blind1.png',
          'name' => 'Interior Blind: Roman Shades Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-Slimeline_Blinds1.png',
          'name' => 'Interior Blind: Slimeline Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-panel_blinds.png',
          'name' => 'Interior Blind: Panel Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_sheer_blind.png',
          'name' => 'Interior Blind: Vertical Sheer Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-skylight_blind1.png',
          'name' => 'Interior Blind: Skylight Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-rainbow_blind1.png',
          'name' => 'Interior Blind: Rainbow Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vitrom_blinds1.png',
          'name' => 'Interior Blind: Vitrom Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_bars_blinds1.png',
          'name' => 'Interior Blind: Roman Bars Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-wooden_blinds1.png',
          'name' => 'Interior Blind: Wooden Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_blinds1.png',
          'name' => 'Interior Blind: Vertical Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-curtain_manual1.png',
          'name' => 'Interior Blind: Curtain Manual',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817510/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_suntex_blind1.png',
          'name' => 'Exterior Blind: Suntex Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_windhouse_outdoor_blinds1.png',
          'name' => 'Exterior Blind: Windhouse Outdoor Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_uv_blinds1.png',
          'name' => 'Exterior Blind: UV Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_Door1.png',
          'name' => 'Insect Screens: Lipat Door',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Magnetic_Insect_Screen1.png',
          'name' => 'Insect Screens: Magnetic Insect Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-windhouse_insect_screen1.png',
          'name' => 'Insect Screens: Windhouse Insect Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_windows1.png',
          'name' => 'Insect Screens: Lipat Windows',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-rubber_insect_screen.png',
          'name' => 'Insect Screens: Rubber Insect Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-Pintu_Exona1.png',
          'name' => 'Partition: Pintu exona',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-shower_screen1.png',
          'name' => 'Partition: Shower Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817519/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-tralis_exona1.png',
          'name' => 'Partition: Tralis Exona',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-folding_doors1.png',
          'name' => 'Partition: Folding Door',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '8',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Decorative 3D Interior Panels',
          'description' => 'Pulp of sugarcane Bagassse or of other fibrous cellulostic Material;Moulded or pressed articles of sugarcane Bagasse pulp or of other fibrous cellulosic Material other pulp, cellulose wadding and webs of celulose fibres, cut to size or shape; other articles of sugarcane Bagasse ulp, cellulse fibres.',
          'detail' => '<p>Size <strong>500x500 mm or 625x800mm with ±0.5 mm. Tolerance sideways per 500 mm and ±0.7 mm diagonal</strong></p><p>Weight <strong>+275 grams</strong></p><p>Thickness <strong>approx 1.5mm (±tolerance of 0.05mm)</strong></p><p>Height <strong>thickness of panel +15mm (total approx15.5mm)</strong></p><p>Material <strong>white bagasse (natural bleanched sugarcene pulp)</strong></p><p>Packing <strong>12 panel covers 3m² (for 500x500 mm) and 6 panels covers 3m² (for 625x800mm)</strong></p><p>Fire Resistance <strong>Classic, but we advice to use class a fire proof coating/fire retardant paint like dc333 after installing for best an safest result!</strong></p>'
        ]);
        $serviceitem->save();
    }
}
