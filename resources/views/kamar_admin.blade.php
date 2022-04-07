@extends('layouts.main_admin')

@section('kamar_admin')
        <div class="card bg-cream rounded-20 mt-4">
            <div class="card-body">
                <table class="table table-hover form-brown text-form-brown">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nomor Kamar</th>
                        <th scope="col">Tipe Kamar</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="align-middle" scope="row">1</th>
                        <td class="align-middle">1</td>
                        <td class="align-middle">Deluxe</td>
                        <td>
                            <a href="" class="btn btn-1 text-white rounded-10">Edit</a>
                            <a href="" class="btn btn-2 text-brown rounded-10">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
@endsection
