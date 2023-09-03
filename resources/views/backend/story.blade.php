@extends('backend.layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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

        .story-line-height {
            line-height: 1.5;
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
            @foreach ($stories as $key => $story)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $story->title }}</td>
                    <td class="col-md-6">
                        <div class="description">
                            {{ $story->story }}
                        </div>
                    </td>
                    <td>{{ $story->created_at->toDateString() }}</td>
                    <td>
                        <button type="button" class="btn view-story btn-link" data-toggle="modal" data-target="#storyModal"
                            data-title="{{ $story->title }}" data-story="{{ $story->story }}">
                            <i class="fa fa-eye icon"></i>
                        </button>
                        <a href="{{ route('admin.editstory', $story->id) }}"><i class="fas fa-edit mr-3"></i></a>
                        <a href="{{ route('admin.deletestory', $story->id) }}" class="delete-link"><i
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
                    @csrf
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

                    <h6 id="modalStory" class="story-line-height"></h6>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // Handle the click event on the "eye" button
            $('.view-story').click(function() {
                var title = $(this).data('title');
                var story = $(this).data('story');

                // Populate the modal with data
                $('#modalTitle').text(title);
                $('#modalStory').html(story);
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
