<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.css') }}">
</head>
<body>
    <div class="row g-0">
        <div class="col-md-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="height: inherit; min-height:100vh;">
            <a class="d-flex  alignment-items-center text-white text-decoration-none mb-1" href="#">
                <i class="bi bi-apple me-2 mt-1"></i><span class="fw-bold fs-4">APPLE ADMIN</span></a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto mt-1">
                    <li>
                        <a href="/dashboard" class="nav-link text-white"><i class="bi bi-bank me-2"></i>HOME</a>
                    </li>
                    <li>
                        <a href="/project" class="nav-link active text-white"><i class="bi bi-pc-display-horizontal me-2"></i>MASTER PROJECT</a>
                    </li>
                    <li>
                        <a href="/service" class="nav-link text-white"><i class="bi bi-hammer me-2"></i>MASTER SERVICE</a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <div class="dropdown">
                        <a class="d-flex align-items-center dropdown-toggle text-decoration-none text-white"  data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>Admin</strong>
                        
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            
            <div class="col-md-9">
              <div class="container-fluid">
                  <div class="row">
                      <h2 class="mt-2">Pinjaman Barang</h2>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                          <div class="card">
                              <div class="card-header">
                                  <h6>Data project</h6>
                              </div>
                              <div class="card-body table-responsive">
                                  <table class="table">
                                      <thead>
                                          <th>#</th>
                                          <th>Title</th>
                                          <th>Date</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Company Profile SMKN 1 Surabaya</td>
                                              <td>20 February 2023</td>
                                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                              <td>
                                                  <div class="d-flex justify-content-end">
                                                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                                  <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                  <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                              </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                    </table>
                                    <table class="table table-responsive">
                                      <thead>
                                          <th>#</th>
                                          <th>Title</th>
                                          <th>Date</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Company Profile SMKN 1 Surabaya</td>
                                              <td>20 February 2023</td>
                                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                              <td>
                                                  <div class="d-flex justify-content-end">
                                                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                                  <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                  <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                              </div>
                                          </tr>
                                      </tbody>
                                    </table>    
                                    <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            ...
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-header">
                                  <h6>Tambah Project</h6>
                              </div>
                              <div class="card-body">
                                  <form action="">
                                      <label class="form-label" for="">Service Type</label>
                                      <select class="form-select">
                                          <option value="1">Web Desain</option>
                                          <option value="2">Web Dev</option>
                                          <option value="3">SEO</option>
                                        </select>
                                      <label class="form-label" for="">Project Name</label>
                                      <input class="form-control" type="text" minlength="5" required>
                                      <label class="form-label" for="">Project Date</label>
                                      <input class="form-control" type="date" required>
                                      <label class="form-label" for="">Picture</label>
                                      <input class="form-control" type="file" required>
                                      <label class="form-label" for="">Description</label>
                                      <textarea class="form-control" name="" id=""></textarea>
                                      <label class="form-label" for="">Project Status</label>
                                      <div class="form-check">
                                          <input name="status" class="form-check-input" type="radio" name="" id="">
                                          <label class="form-check-label" for="">Ongoing</label>
                                      </div>
                                      <div class="form-check">
                                          <input name="status" class="form-check-input" type="radio" name="" id="">
                                          <label class="form-check-label" for="">Finish</label>
                                      </div>
                                      <input class="btn btn-success mt-4" type="submit" value="Simpan">
                                      <input class="btn btn-danger mt-4" type="button" value="Cancel">
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
         </div>
         
       
  
  
            


    <script src="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\js\bootstrap.js"></script>
</body>
</html>