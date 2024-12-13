
@extends('Layouts.MainAdmin')

@section('Container')

    <div class="wrapper">

      <div class="main-panel">
        @include('Partials.NavbarAdmin')

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Postingan</h3>
                <h6 class="op-7 mb-2">Silahkan tambah postingan</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">


                <a href="{{ route('post.create') }}" class="btn btn-primary btn-round">Tambah Postingan</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Visitors</p>
                          <h4 class="card-title">1,294</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Subscribers</p>
                          <h4 class="card-title">1303</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Sales</p>
                          <h4 class="card-title">$ 1,345</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Order</p>
                          <h4 class="card-title">576</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

                </div>
                <div class="row">

              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Masukan Data Postingan</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">


                      <!-- Projects table -->
                      <form action="{{ route('post.update', $post->id) }}" method="POST"  enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col" class="text-end"></th>


                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <th scope="row" colspan="6">
                                <label for="exampleInputname1" class="form-label">Category</label>
                                <select class="form-control" id="id_category" name="id_category" aria-describedby="id_category" required >
                                    <option name="id_category" value="{{ $post->id_category }}">{{ $post->id_category }}</option>
                                    <option name="id_category" value="Viral">Viral</option>
                                    <option name="id_category" value="Teknologi">Teknologi</option>
                                    <option name="id_category" value="Edukasi">Edukasi</option>
                                    <option name="id_category" value="Politik">Politik</option>
                                    <option name="id_category" value="Olah Raga">Olah Raga</option>
                                    <option name="id_category" value="Wisata">Wisata</option>
                                    <option name="id_category" value="Manca Negara">Manca Negara</option>
                                    <option name="id_category" value="Kesehatan">Kesehatan</option>
                                    <option name="id_category" value="Gaya Hidup">Gaya Hidup</option>
                                    <option name="id_category" value="Kuliner">Kuliner</option>
                                    <option name="id_category" value="Otomotif">Otomotif</option>
                                    <option name="id_category" value="Sejarah">Sejarah</option>
                                    <option name="id_category" value="Film">Film</option>

                                </select>

                            </th>
                          </tr>
                          <tr>
                            <th scope="row" colspan="6">
                            <label for="exampleInputname1" class="form-label">Gambar</label><br>
                            <img src="{{ asset('storage/public/posts/'.$post->image) }}" width="20%">
                            <input type="file" class="form-control" id="name" name="image" aria-describedby="Cover" value="{{ $post->image }}">

                            </th>
                          </tr>
                          <tr>
                            <th scope="row" colspan="6">
                                <label for="exampleInputname1" class="form-label">Title</label>
                                <input type="text" class="form-control" id="name" name="title" aria-describedby="name Category" value="{{ $post->title }}" required>

                            </th>
                          </tr>
                          <tr>
                            <th scope="row" colspan="6">
                                <label for="exampleInputname1" class="form-label">Content</label>
                                <textarea id="myTextarea" name="content">{{ $post->content }}</textarea>

                            </th>
                          </tr>
                          <tr>
                            <th scope="row" colspan="6">
                                <label for="exampleInputname1" class="form-label">Author</label>
                                <input type="text" class="form-control" id="name" name="author" aria-describedby=" author name" required value="{{ $post->author }}">

                            </th>
                          </tr>
                          <tr>
                            <th scope="row" colspan="6">
                                <label for="exampleInputname1" class="form-label">Source</label>
                                <input type="text" class="form-control" id="producer" name="source" aria-describedby="source" value="{{ $post->source }}" required >

                            </th>
                          </tr>
                          <tr>
                            <th scope="row" colspan="6">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </th>
                          </tr>


                        </tbody>
                      </table>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


