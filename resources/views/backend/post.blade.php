@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- datatable cdn --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <style>
        .description {
            max-width: 550px;

        }

        .tablepost-hidedata {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            /* Adjust this value to control the number of lines displayed */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .title {
            max-width: 100px;
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

        .story-line-height {
            line-height: 1.5;
        }
    </style>
@endsection

@section('content')
    <div class="heading">
        <h4>
            List of Posts
        </h4>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-outline-success mx-4 my-3" type="button" data-toggle="modal" data-target="#AddPostModal">Add
            New</button>
    </div>
    <table class="table table-striped table-hover" id="storyTable">
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
            @foreach ($posts as $key => $post)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="col-md-2 title tablepost-hidedata">{{ $post->title }}</td>
                    <td class="col-md-6">
                        <div class="description tablepost-hidedata">
                            {!! $post->post !!}
                        </div>
                    </td>
                    <td>{{ $post->datePosted }}</td>
                    <td>
                        <button type="button" class="btn view-post btn-link" data-toggle="modal" data-target="#storyModal"
                            data-title="{{ $post->title }}" data-post="{{ $post->post }}">
                            <i class="fa fa-eye icon"></i>
                        </button>
                        <a href="{{ route('admin.editpost', $post->id) }}"><i class="fas fa-edit mr-3"></i></a>
                        <a href="{{ route('admin.deletepost', $post->id) }}" class="delete-link"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @foreach ($stories as $key => $story)
        <p>{!! $story->title !!}</p>
        <p>{!! $story->story !!}</p>
    @endforeach --}}




    <!-- Modal to add new story-->
    <div class="modal fade" id="AddPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.savepost') }}" method="GET">
                    @csrf
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title" id="name"
                                    placeholder="Title for your writing">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="description" class="form-label">Post:</label>
                                <textarea class="form-control" id="description" name="post" rows="5" placeholder="What are you thinking"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Story</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- modal to view story on icon click  --}}
    <div class="modal fade" id="storyModal" tabindex="-1" role="dialog" aria-labelledby="storyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="storyModalLabel">Story Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5 id="modalTitle" class="text-center text-danger"></h5>

                    <h6 id="modalPost" class="story-line-height"></h6>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            $('#storyTable').DataTable();


            // Handle the click event on the "eye" button
            $('.view-post').click(function() {
                var title = $(this).data('title');
                var post = $(this).data('post');

                // Populate the modal with data
                $('#modalTitle').text(title);
                $('#modalPost').html(post);
            });
            //delete sweet alert
            $('.delete-link').on('click', function(e) {
                e.preventDefault();

                // Use SweetAlert to show a confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If the user confirms, proceed with the deletion
                        window.location.href = $(this).attr('href');
                    }
                });
            });

        });
    </script>
@endsection
