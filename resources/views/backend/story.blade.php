@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .description {
            max-width: 550px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .heading {
            position: relative;
            text-align: center;
            font-size: 24px;
            color: #800000;
            /* Dark Maroon Color */
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
            padding-top: 20px;
        }

        .heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            /* Adjust the width of the border */
            height: 3px;
            /* Border thickness */
            background-color: #800000;
            /* Dark Maroon Color */
        }
    </style>
@endsection

@section('content')
    <div class="heading">
        <h4>
            List of Stories
        </h4>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-outline-success mx-4 my-3" type="button" data-toggle="modal" data-target="#AddStoryModal">Add
            New</button>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>SN</th>
                <th>Title</th>
                <th class="col-md-6">Description</th>
                <th>Date Posted</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>Starting Point</td>
                <td class="col-md-6">
                    <div class="description">


                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, id corrupti
                        modi laudantium
                        perspiciatis illum assumenda sapiente pariatur facilis fugiat ipsam, sed, incidunt earum excepturi
                        vitae
                        eos exercitationem eius cupiditate?
                    </div>
                </td>
                <td>2023-2-2</td>
                <td>
                    <a href="#"><i class="fa fa-eye icon"></i></a>
                    <a href="#"><i class="fa fa-trash"></i></a>
                    <a href="#"><i class="fas fa-edit"></i></a>


                </td>

            </tr>
        </tbody>
    </table>



    <!-- Modal -->
    <div class="modal fade" id="AddStoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Story</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.savestory') }}" method="GET">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title" id="name"
                                    placeholder="Title for your writing">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="description" class="form-label">Story:</label>
                                <textarea class="form-control" id="description" name="story" rows="5" placeholder="What are you thinking"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
