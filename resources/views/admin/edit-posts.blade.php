<!DOCTYPE html>
<html>
<head>
    <style>

        .fixed-right {
            margin: 1px 10px 10px 990px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
@include('admin._header')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php
            $num = 13
            ?>
            <div class="col-md-{{$num}}">
                <div class="box-body">
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <img class="img-circle " width="100" src="../dist/img/user1-128x128.jpg" alt="User Image">

                                <div class="dropdown fixed-right navbar-collapse-right">
                                    <i class="fa fa-angle-down"></i>
                                    <div class="dropdown-content">

                                        <p><a href="#">Delete Post</a></p>
                                        <p><a href="#">Block User</a></p>
                                        <p><a href="#">Edit Post</a></p>

                                    </div>
                                </div>


                                <span class="username"><a href="#"></a></span>
                                <span class="description">Author: Admin  - 7:30 PM Today</span>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <img class="img-responsive pad pull-left" width="100" src="../dist/img/photo2.png" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?  Description about the attachment can be placed here.Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a></p>
                        </div>
                        <div class="box-footer">

                            <span class="pull-right text-muted">127 likes - 3 comments</span>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                    <?php
                    $num++
                    ?>
                </div>

                <div class="col-md-{{$num}}">
                    <div class="box-body">
                        <div class="box box-widget">
                            <div class="box-header with-border">
                                <div class="user-block">
                                    <img class="img-circle " width="100" src="../dist/img/user1-128x128.jpg" alt="User Image">

                                    <div class="dropdown fixed-right">
                                        <i class="fa fa-angle-down"></i>
                                        <div class="dropdown-content">

                                            <p><a href="#">Delete Post</a></p>
                                            <p><a href="#">Block User</a></p>
                                            <p><a href="#">Edit Post</a></p>

                                        </div>
                                    </div>


                                    <span class="username"><a href="#"></a></span>
                                    <span class="description">Author: Admin  - 7:30 PM Today</span>
                                </div>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <img class="img-responsive pad pull-left" width="100" src="../dist/img/photo2.png" alt="Photo">

                                <p>I took this photo this morning. What do you guys think?  Description about the attachment can be placed here.Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a></p>
                            </div>
                            <div class="box-footer">

                                <span class="pull-right text-muted">127 likes - 3 comments</span>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                        <?php
                        $num++
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
@include('admin._footer')

