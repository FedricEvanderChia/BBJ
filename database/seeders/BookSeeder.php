<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['name' => 'Limitless', 'author_id' => 1, 
            'desc'=>"Blue, straight hair slightly reveals a fine, tense face. Bright green eyes, set handsomely within their sockets, watch rapidly over the ancestors they've defended for so long. Fire has left a mark reaching from just under the right eye , running towards his left nostril and ending on his chin leaves a tormenting burden of his unfortunate past.",'price'=>20000],
            ['name' => 'The Psychology of Money', 'author_id' => 2, 'desc'=>"Brown, oily hair slightly reveals a skinny, worried face. Gentle green eyes, set far within their sockets, watch watchfully over the tribe they've been seperated from for so long. A goatee gracefully compliments his cheeks and leaves a heartbreaking memory of his fortunate survival.", 'price'=>120000],
            ['name' => 'Thinking Fast and Slow', 'author_id' => 3, 'desc'=>"Silver, curly hair is pulled back to reveal a fine, charming face. Smart black eyes, set wickedly within their sockets, watch admiringly over the haven they've shown mercy on for so long. Tribal marks in the form of 2 stripes under each eye marks her lineage but, more importantly and leaves a pleasurable memory of battles long forgotten.", 'price'=>52000],
            ['name' => 'Start with Why', 'author_id' => 6, 'desc'=>"Brown, shoulder-length hair awkwardly hangs over a sculpted, cheerful face. Shining golden eyes, set well within their sockets, watch eagerly over the woods they've worshipped for so long. Freckles are spread delightfully across her cheeks and and leaves a delightful memory of her adventurous love life.", 'price'=>69000],
            ['name' => 'Sapiens', 'author_id' => 4, 'desc'=>"Ginger, short hair neatly coiffured to reveal a long, charming face. Narrow black eyes, set delicately within their sockets, watch cautiously over the children they've sworn to protect for so long. A gunshot left a mark stretching from the bottom of the left cheek , running towards her upper lip and ending on her left cheekbone and leaves an amusing memory of battles long forgotten.", 'price'=>45000],
            ['name' => 'Atomic Habits', 'author_id' => 15, 'desc'=>"Ginger, short hair slightly reveals a craggy, cheerful face. Glistening amber eyes, set appealingly within their sockets, watch delightedly over the stronghold they've defended for so long. Scars reaching from just under the right eye , running across the nose and ending on her left nostril and leaves a pleasurable memory of redeemed honor.", 'price'=>87000],
            ['name' => 'The subtle art of not giving a fuck', 'author_id' => 7, 'desc'=>"Blonde, short hair braided to reveal a bony, charming face. Heavy hazel eyes, set far within their sockets, watch delightedly over the tribes they've felt disconnected from for so long. Fire has left a mark stretching from the top of the left cheek , running across the nose and ending on her left nostril and leaves a tormenting memory of lost friends.", 'price'=>79000],
            ['name' => 'Every thing is fucked', 'author_id' => 7, 'desc'=>"Blonde, long layed hair tight in a ponytail reveals a chiseled, tense face. Darting silver eyes, set appealingly within their sockets, watch energetically over the ships they've stood guard for for so long. An old tattoo of a small dragon is displayed on the side of her left cheekbone and leaves an amusing memory of a great reputation.", 'price'=>130000],
            ['name' => 'Clean Code', 'author_id' => 9, 'desc'=>"Black, frizzy hair tight in a ponytail reveals a bony, radiant face. Small blue eyes, set deep within their sockets, watch cautiously over the children they've been isolated from for so long. Soft skin beautifully compliments his mouth and leaves a fascinating memory of his fortunate survival.", 'price'=>120000],
            ['name' => 'Hands-On Machine Learning with Scikit-Learn, Keras, and TensorFlow', 'author_id' => 8, 'desc'=>"Gray, shoulder-length hair tight in a ponytail reveals a fresh, wild face. Shining black eyes, set thightly within their sockets, watch impatiently over the haven they've bled for for so long. A sword left a mark stretching from the bottom of the right cheek , running towards the right side of his lips and ending on his right cheekbone leaves a tormenting burden of a great reputation.", 'price'=>200000],
            ['name' => 'Hit Refresh', 'author_id' => 12, 'desc'=>"Pink, perfectly groomed hair almost fully covers a furrowed, tense face. Squinting gray eyes, set charmingly within their sockets, watch gratefully over the mountains they've disassociated with for so long. An old tattoo resembling a small cross is prominently featured on the right side of his neck leaves a stinging memory of lost friends.", 'price'=>79000],
            ['name' => 'Shoe Dog', 'author_id' => 10, 'desc'=>"Green, long hair neatly coiffured to reveal a strong, gloomy face. Dead sapphire eyes, set elegantly within their sockets, watch meticulously over the woods they've cared for for so long. Fair skin charmingly compliments his cheeks and leaves a satisfying memory of his luck in battles.", 'price'=>92000],
            ['name' => 'Elon Musk', 'author_id' => 11, 'desc'=>"Chestnut, oily hair is pulled back to reveal a lean, menacing face. Dead amber eyes, set a-symmetrically within their sockets, watch energetically over the families they've protected for so long. A goatee gracefully compliments his eyes and leaves an intriguing memory of his fortunate adventures.", 'price'=>82000],
            ['name' => 'Steve Jobs', 'author_id' => 14, 'desc'=>"Black, short hair is pulled back to reveal a craggy, cheerful face. Glittering hazel eyes, set deep within their sockets, watch yearningly over the families they've barely related to for so long. Soft skin alluringly compliments his hair and cheekbones and leaves a heartbreaking memory of his fortunate destiny.", 'price'=>52000],
            ['name' => 'How to Avoid a Climate Disaster', 'author_id' => 13, 'desc'=>"Red, greasy hair neatly coiffured to reveal a long, sad face. Narrow green eyes, set seductively within their sockets, watch hungrily over the wildlife they've worshipped for so long. Soft skin gorgeously compliments his eyes and hair and leaves a beautiful memory of his fortunate adventures.", 'price'=>39000]
        ]);
    }
}
