<div class="container">
<h1 class="text-center">FORM CREATE</h1>

    <form method="post" action="<?= base_url('home/create')?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">No. Handphone</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No handphone" name="nohp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="tgllahir">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Golongan</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Golongan" name="golongan">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Add</button>
    </form>
</div>