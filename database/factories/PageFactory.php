<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Page Factory
            'user_id' => rand(1, 5),
            'title_my' => 'Itik',
            'title_en' => 'A Duck',
            'slug_my' => 'itik',
            'slug_en' => 'duck',
            'content_my' => '<p><img alt="" src="http://portal.test/storage/upload/img/duck-1641348775.jpg" style="height:219px; width:200px" /></p>

<hr />
<div id="lipsum">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat ultrices urna sed bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis dapibus tellus interdum dui pharetra vehicula. Suspendisse fringilla, eros et faucibus facilisis, purus odio convallis purus, in consectetur tortor mi non est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis pulvinar, nunc sit amet facilisis consectetur, risus elit posuere nulla, volutpat semper ipsum purus vitae lacus. Ut sed enim quis metus mattis viverra a commodo ex. Suspendisse a nulla eu diam vehicula dictum. Fusce porttitor ante leo, id lobortis lorem sodales quis. Proin eu nulla a eros tincidunt tincidunt eu vitae justo. Quisque euismod, massa quis sodales ultricies, diam justo luctus velit, et auctor velit quam vitae ligula.</p>

<p>Morbi porttitor vehicula velit eget venenatis. Cras felis ipsum, gravida sed tempor at, viverra a est. Maecenas pretium ante vitae massa tempus, ac tincidunt est maximus. Donec leo dolor, viverra non dui semper, sodales molestie felis. Aliquam eget hendrerit quam. Aliquam tempus feugiat arcu quis malesuada. Nam vestibulum luctus urna eu iaculis. Sed euismod augue id odio accumsan, ut lacinia eros convallis. Pellentesque id lectus velit. Aliquam erat volutpat.</p>

<p>Sed eu lacus ipsum. Morbi porta augue gravida, laoreet est in, ultrices dui. Vestibulum urna est, rhoncus eu lectus eu, gravida pretium elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi ornare ultricies lacinia. Vivamus vel dolor ac enim laoreet tristique eu ullamcorper tellus. Donec ut turpis id leo rutrum laoreet nec ac ligula. Fusce efficitur lobortis velit et sodales. Vivamus ligula urna, hendrerit sit amet congue eget, viverra sit amet turpis. Praesent feugiat diam consequat, tincidunt eros ullamcorper, rhoncus neque. Nullam accumsan ultricies magna, in tincidunt nibh sollicitudin quis. Nunc leo neque, dapibus pellentesque semper tristique, ornare fringilla ex. Curabitur elementum eleifend volutpat. Proin sed nulla non metus molestie mollis et eget nibh.</p>

<p>Nam a ligula non turpis sollicitudin ullamcorper. Donec auctor arcu justo, at pulvinar dolor ultrices a. Mauris eget mauris metus. Pellentesque quam metus, ultrices a lobortis nec, faucibus in dolor. Nam efficitur urna at augue molestie, at tempor dui tempus. Nunc pulvinar felis eu enim fermentum euismod. Quisque mattis, eros in efficitur ultricies, sapien justo condimentum erat, vitae ultrices lorem tortor a nibh.</p>

<p>Pellentesque quis eros et sapien tristique rutrum. Etiam convallis placerat massa non tempus. Fusce vulputate, justo pharetra molestie porttitor, felis lorem imperdiet orci, sed pharetra sem velit sit amet neque. Quisque eget porttitor metus, ultricies rutrum nulla. Proin sit amet commodo lorem, sit amet dictum massa. Nam ullamcorper lacinia risus eu facilisis. Integer molestie viverra turpis at pulvinar. Aliquam odio ante, scelerisque maximus eleifend sed, vehicula et leo. Praesent in mi molestie mauris ornare tempus non nec justo. Sed finibus erat tortor, eget pharetra risus congue ut.</p>
</div>',
            'content_en' => '<p><img alt="" src="http://portal.test/storage/upload/img/duck-1641348775.jpg" style="height:219px; width:200px" /></p>

<hr />
<div id="lipsum">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat ultrices urna sed bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis dapibus tellus interdum dui pharetra vehicula. Suspendisse fringilla, eros et faucibus facilisis, purus odio convallis purus, in consectetur tortor mi non est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis pulvinar, nunc sit amet facilisis consectetur, risus elit posuere nulla, volutpat semper ipsum purus vitae lacus. Ut sed enim quis metus mattis viverra a commodo ex. Suspendisse a nulla eu diam vehicula dictum. Fusce porttitor ante leo, id lobortis lorem sodales quis. Proin eu nulla a eros tincidunt tincidunt eu vitae justo. Quisque euismod, massa quis sodales ultricies, diam justo luctus velit, et auctor velit quam vitae ligula.</p>

<p>Morbi porttitor vehicula velit eget venenatis. Cras felis ipsum, gravida sed tempor at, viverra a est. Maecenas pretium ante vitae massa tempus, ac tincidunt est maximus. Donec leo dolor, viverra non dui semper, sodales molestie felis. Aliquam eget hendrerit quam. Aliquam tempus feugiat arcu quis malesuada. Nam vestibulum luctus urna eu iaculis. Sed euismod augue id odio accumsan, ut lacinia eros convallis. Pellentesque id lectus velit. Aliquam erat volutpat.</p>

<p>Sed eu lacus ipsum. Morbi porta augue gravida, laoreet est in, ultrices dui. Vestibulum urna est, rhoncus eu lectus eu, gravida pretium elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi ornare ultricies lacinia. Vivamus vel dolor ac enim laoreet tristique eu ullamcorper tellus. Donec ut turpis id leo rutrum laoreet nec ac ligula. Fusce efficitur lobortis velit et sodales. Vivamus ligula urna, hendrerit sit amet congue eget, viverra sit amet turpis. Praesent feugiat diam consequat, tincidunt eros ullamcorper, rhoncus neque. Nullam accumsan ultricies magna, in tincidunt nibh sollicitudin quis. Nunc leo neque, dapibus pellentesque semper tristique, ornare fringilla ex. Curabitur elementum eleifend volutpat. Proin sed nulla non metus molestie mollis et eget nibh.</p>

<p>Nam a ligula non turpis sollicitudin ullamcorper. Donec auctor arcu justo, at pulvinar dolor ultrices a. Mauris eget mauris metus. Pellentesque quam metus, ultrices a lobortis nec, faucibus in dolor. Nam efficitur urna at augue molestie, at tempor dui tempus. Nunc pulvinar felis eu enim fermentum euismod. Quisque mattis, eros in efficitur ultricies, sapien justo condimentum erat, vitae ultrices lorem tortor a nibh.</p>

<p>Pellentesque quis eros et sapien tristique rutrum. Etiam convallis placerat massa non tempus. Fusce vulputate, justo pharetra molestie porttitor, felis lorem imperdiet orci, sed pharetra sem velit sit amet neque. Quisque eget porttitor metus, ultricies rutrum nulla. Proin sit amet commodo lorem, sit amet dictum massa. Nam ullamcorper lacinia risus eu facilisis. Integer molestie viverra turpis at pulvinar. Aliquam odio ante, scelerisque maximus eleifend sed, vehicula et leo. Praesent in mi molestie mauris ornare tempus non nec justo. Sed finibus erat tortor, eget pharetra risus congue ut.</p>
</div>',
            'status_id' => '1',
            'type' => 'page',
        ];
    }
}
