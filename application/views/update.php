<div class="container">
<h1 class="text-center">FORM UPDATE</h1>

    <form method="post" action="<?= base_url('home/update/' . $item->id)?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama" value="<?= $item->nama ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">No. Handphone</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No handphone" name="nohp" value="<?= $item->nohp ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="tgllahir" value="<?= $item->tgllahir ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Golongan</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Golongan" name="golongan" value="<?= $item->golongan ?>">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
</div>