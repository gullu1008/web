<h1 class="mt-4 text-primary"><i>KAYIT DÜZENLE</i></h1>
<?= validation_list_errors() ?>

<form action="<?=base_url('kayit_duzenle/'.$veri['id'])?>" method="post">
    <?=csrf_field()?>
    <div class="form-group">
        <label for="baslik">Başlık</label>
        <input type="text" class="form-control" id="baslik" name="baslik" value="<?=esc($veri['baslik'])?>">
    </div>
    <div class="form-group">
        <label for="icerik">İçerik:</label>
        <textarea cols="10" class="form-control" name="icerik" id="icerik"><?=esc($veri['icerik'])?></textarea>
    </div>


    <input type="submit" name="gonder" class="btn btn-primary" value="Güncelle">

</form>
<div class='pb-5'></div>
