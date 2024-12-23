<h1 class="mt-4 text-primary"><i>KAYIT EKLE</i></h1>
<?= validation_list_errors() ?>

<form action="<?=base_url('kayit_ekle')?>" method="post" enctype="multipart/form-data">
    <?=csrf_field()?>
    <div class="form-group">
        <label for="baslik">Başlık</label>
        <input type="text" class="form-control" id="baslik" name="baslik">
    </div>
    <div class="form-group">
        <label for="icerik">İçerik:</label>
        <textarea cols="10" class="form-control" name="icerik" id="icerik"></textarea>
    </div>
    <div class="form-group">
        <label for="resim">Resim</label>
        <input type="file" class="form-control" id="resim" name="resim">
    </div>


    <input type="submit" name="gonder" class="btn btn-primary" value="Ekle">

</form>
<div class='pb-5'></div>
