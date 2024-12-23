
<div class="container">
    <div class="row">
        <?php
        if(isset($kayitlar) && count($kayitlar)>0)
        {
            foreach ($kayitlar as $item)
            {
                echo '<div class="col-md-3">';
                echo '<div class="card">';
                echo '<img style="height:200px" class="card-img-top img-fluid img-thumbnail" src="'.base_url("uploads/").$item['resim'].'" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$item['baslik'].'</h5>';
                echo '<p class="card-text">'.word_limiter($item['icerik'], 10).'</p>';
                echo '<a href="'.base_url('incele/'.$item['url']).'" class="btn btn-primary">İncele</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>

        <?php
        }
        else
        {
        ?>

        <?php
        }
        ?>

    </div>

</div>