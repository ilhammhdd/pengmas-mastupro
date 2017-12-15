<?php $__env->startSection('page_title'); ?>
    HAY
<?php $__env->stopSection(); ?>

<?php $__env->startSection('other_css'); ?>
    <style>
        #scrollspyline {
            margin-bottom: 70px;
            opacity: 0.0;
        }

        #main {
            margin-left: 70px;
            margin-right: 70px;
        }

        .section.scrollspy {
            height: 100vh;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        ul.categories li {
            border-radius: 5px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('layouts.hay_master_navbar_landing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
        <div id="main" class="container">
            <div class="row">
                <div class="col s12">
                    <div id="aboutus" class="section scrollspy">
                        <hr id="scrollspyline"/>
                        <p>
                            About Us<br/>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non tempor tellus.
                            Pellentesque in pretium tellus. Nulla facilisi. Nunc semper semper finibus. Vestibulum neque
                            mi,
                            condimentum in lobortis non, vehicula quis dolor. Aliquam pellentesque lectus ut faucibus
                            facilisis. Aenean fringilla viverra ex, sed elementum enim aliquet in. Pellentesque et ex
                            faucibus, vestibulum elit nec, venenatis purus. Cras neque magna, rhoncus et viverra in,
                            molestie nec leo. Proin vel erat nisi. Nulla facilisi. Nulla congue risus lacus, nec luctus
                            enim
                            hendrerit vel.

                            Duis non mi molestie, vulputate nunc eget, tempor orci. Cras quis est gravida, tincidunt
                            ipsum
                            et, molestie nulla. Donec interdum lobortis lacus, dictum lobortis sem tempor id. Integer et
                            velit justo. Cras ac convallis lectus. Curabitur ac mollis eros. Duis nec ante sit amet
                            neque
                            euismod faucibus. Aenean lobortis felis tellus, vel porta lorem porta at. Suspendisse non
                            sem
                            mauris. Etiam porta nisl mauris, in luctus eros tincidunt eget.

                            Sed vel viverra nisi, nec pretium elit. Quisque placerat lacus quis ligula accumsan, quis
                            pulvinar dui varius. Vestibulum dapibus, dui in congue ornare, purus nibh posuere tortor, eu
                            pellentesque lacus arcu quis justo. Vestibulum viverra lacus felis, sit amet pellentesque
                            eros
                            sodales non. Aenean ligula enim, hendrerit eu pretium in, viverra et sapien. Aenean
                            facilisis
                            egestas justo vel posuere. Proin mattis sit amet massa sit amet finibus. Praesent tempus
                            volutpat felis vel malesuada. Aenean convallis lacus enim, et pellentesque arcu venenatis
                            et.
                            Vestibulum lacinia varius aliquam. Fusce bibendum porttitor enim, vel volutpat erat
                            hendrerit
                            sit amet. Cras volutpat odio at purus aliquam tincidunt id eu nisi. Donec nec euismod eros.
                            Nullam consequat at nisi non blandit.

                            Proin ut sapien tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere
                            cubilia Curae; Quisque urna eros, congue vel arcu dictum, facilisis dapibus nibh. Nam orci
                            elit,
                            rhoncus vitae enim vitae, auctor laoreet nibh. Donec sed rhoncus arcu. Phasellus convallis
                            congue felis, at pulvinar diam tincidunt non. Nunc justo velit, sagittis nec sollicitudin
                            vitae,
                            maximus in urna. Aenean laoreet mi nec ipsum bibendum, sit amet posuere neque laoreet.
                            Vivamus
                            bibendum viverra scelerisque.

                            Duis a feugiat augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per
                            inceptos himenaeos. Curabitur porttitor ac eros in congue. Aenean placerat nec mi eu
                            egestas.
                            Aliquam erat volutpat. Cras id feugiat neque. Quisque non felis velit. Sed ut mattis mauris,
                            quis mattis nisl. Vivamus quis urna vel lorem maximus rutrum. Nam vitae placerat mi.
                            Pellentesque a nisl non sapien accumsan blandit id eu tortor.

                            Nulla bibendum ante nisi, ut consectetur augue ultrices ut. Quisque suscipit velit tortor,
                            et
                            aliquam quam volutpat et. Donec ullamcorper lectus sit amet elit mattis eleifend. Aliquam
                            gravida feugiat sagittis. Vestibulum at sem sit amet tellus consectetur ultrices consectetur
                            nec
                            est. Fusce eget lectus commodo, suscipit dui eu, mattis libero. Vestibulum metus nisi,
                            consequat
                            id ante ac, dignissim placerat quam.
                        </p>
                    </div>

                    <div id="features" class="section scrollspy">
                        <hr id="scrollspyline"/>
                        <p>
                            Features<br/>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non tempor tellus.
                            Pellentesque in pretium tellus. Nulla facilisi. Nunc semper semper finibus. Vestibulum neque
                            mi,
                            condimentum in lobortis non, vehicula quis dolor. Aliquam pellentesque lectus ut faucibus
                            facilisis. Aenean fringilla viverra ex, sed elementum enim aliquet in. Pellentesque et ex
                            faucibus, vestibulum elit nec, venenatis purus. Cras neque magna, rhoncus et viverra in,
                            molestie nec leo. Proin vel erat nisi. Nulla facilisi. Nulla congue risus lacus, nec luctus
                            enim
                            hendrerit vel.

                            Duis non mi molestie, vulputate nunc eget, tempor orci. Cras quis est gravida, tincidunt
                            ipsum
                            et, molestie nulla. Donec interdum lobortis lacus, dictum lobortis sem tempor id. Integer et
                            velit justo. Cras ac convallis lectus. Curabitur ac mollis eros. Duis nec ante sit amet
                            neque
                            euismod faucibus. Aenean lobortis felis tellus, vel porta lorem porta at. Suspendisse non
                            sem
                            mauris. Etiam porta nisl mauris, in luctus eros tincidunt eget.

                            Sed vel viverra nisi, nec pretium elit. Quisque placerat lacus quis ligula accumsan, quis
                            pulvinar dui varius. Vestibulum dapibus, dui in congue ornare, purus nibh posuere tortor, eu
                            pellentesque lacus arcu quis justo. Vestibulum viverra lacus felis, sit amet pellentesque
                            eros
                            sodales non. Aenean ligula enim, hendrerit eu pretium in, viverra et sapien. Aenean
                            facilisis
                            egestas justo vel posuere. Proin mattis sit amet massa sit amet finibus. Praesent tempus
                            volutpat felis vel malesuada. Aenean convallis lacus enim, et pellentesque arcu venenatis
                            et.
                            Vestibulum lacinia varius aliquam. Fusce bibendum porttitor enim, vel volutpat erat
                            hendrerit
                            sit amet. Cras volutpat odio at purus aliquam tincidunt id eu nisi. Donec nec euismod eros.
                            Nullam consequat at nisi non blandit.

                            Proin ut sapien tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere
                            cubilia Curae; Quisque urna eros, congue vel arcu dictum, facilisis dapibus nibh. Nam orci
                            elit,
                            rhoncus vitae enim vitae, auctor laoreet nibh. Donec sed rhoncus arcu. Phasellus convallis
                            congue felis, at pulvinar diam tincidunt non. Nunc justo velit, sagittis nec sollicitudin
                            vitae,
                            maximus in urna. Aenean laoreet mi nec ipsum bibendum, sit amet posuere neque laoreet.
                            Vivamus
                            bibendum viverra scelerisque.

                            Duis a feugiat augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per
                            inceptos himenaeos. Curabitur porttitor ac eros in congue. Aenean placerat nec mi eu
                            egestas.
                            Aliquam erat volutpat. Cras id feugiat neque. Quisque non felis velit. Sed ut mattis mauris,
                            quis mattis nisl. Vivamus quis urna vel lorem maximus rutrum. Nam vitae placerat mi.
                            Pellentesque a nisl non sapien accumsan blandit id eu tortor.

                            Nulla bibendum ante nisi, ut consectetur augue ultrices ut. Quisque suscipit velit tortor,
                            et
                            aliquam quam volutpat et. Donec ullamcorper lectus sit amet elit mattis eleifend. Aliquam
                            gravida feugiat sagittis. Vestibulum at sem sit amet tellus consectetur ultrices consectetur
                            nec
                            est. Fusce eget lectus commodo, suscipit dui eu, mattis libero. Vestibulum metus nisi,
                            consequat
                            id ante ac, dignissim placerat quam.
                        </p>
                    </div>

                    <div id="download" class="section scrollspy">
                        <hr id="scrollspyline"/>
                        <p>
                            Download<br/>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non tempor tellus.
                            Pellentesque in pretium tellus. Nulla facilisi. Nunc semper semper finibus. Vestibulum neque
                            mi,
                            condimentum in lobortis non, vehicula quis dolor. Aliquam pellentesque lectus ut faucibus
                            facilisis. Aenean fringilla viverra ex, sed elementum enim aliquet in. Pellentesque et ex
                            faucibus, vestibulum elit nec, venenatis purus. Cras neque magna, rhoncus et viverra in,
                            molestie nec leo. Proin vel erat nisi. Nulla facilisi. Nulla congue risus lacus, nec luctus
                            enim
                            hendrerit vel.

                            Duis non mi molestie, vulputate nunc eget, tempor orci. Cras quis est gravida, tincidunt
                            ipsum
                            et, molestie nulla. Donec interdum lobortis lacus, dictum lobortis sem tempor id. Integer et
                            velit justo. Cras ac convallis lectus. Curabitur ac mollis eros. Duis nec ante sit amet
                            neque
                            euismod faucibus. Aenean lobortis felis tellus, vel porta lorem porta at. Suspendisse non
                            sem
                            mauris. Etiam porta nisl mauris, in luctus eros tincidunt eget.

                            Sed vel viverra nisi, nec pretium elit. Quisque placerat lacus quis ligula accumsan, quis
                            pulvinar dui varius. Vestibulum dapibus, dui in congue ornare, purus nibh posuere tortor, eu
                            pellentesque lacus arcu quis justo. Vestibulum viverra lacus felis, sit amet pellentesque
                            eros
                            sodales non. Aenean ligula enim, hendrerit eu pretium in, viverra et sapien. Aenean
                            facilisis
                            egestas justo vel posuere. Proin mattis sit amet massa sit amet finibus. Praesent tempus
                            volutpat felis vel malesuada. Aenean convallis lacus enim, et pellentesque arcu venenatis
                            et.
                            Vestibulum lacinia varius aliquam. Fusce bibendum porttitor enim, vel volutpat erat
                            hendrerit
                            sit amet. Cras volutpat odio at purus aliquam tincidunt id eu nisi. Donec nec euismod eros.
                            Nullam consequat at nisi non blandit.

                            Proin ut sapien tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere
                            cubilia Curae; Quisque urna eros, congue vel arcu dictum, facilisis dapibus nibh. Nam orci
                            elit,
                            rhoncus vitae enim vitae, auctor laoreet nibh. Donec sed rhoncus arcu. Phasellus convallis
                            congue felis, at pulvinar diam tincidunt non. Nunc justo velit, sagittis nec sollicitudin
                            vitae,
                            maximus in urna. Aenean laoreet mi nec ipsum bibendum, sit amet posuere neque laoreet.
                            Vivamus
                            bibendum viverra scelerisque.

                            Duis a feugiat augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per
                            inceptos himenaeos. Curabitur porttitor ac eros in congue. Aenean placerat nec mi eu
                            egestas.
                            Aliquam erat volutpat. Cras id feugiat neque. Quisque non felis velit. Sed ut mattis mauris,
                            quis mattis nisl. Vivamus quis urna vel lorem maximus rutrum. Nam vitae placerat mi.
                            Pellentesque a nisl non sapien accumsan blandit id eu tortor.

                            Nulla bibendum ante nisi, ut consectetur augue ultrices ut. Quisque suscipit velit tortor,
                            et
                            aliquam quam volutpat et. Donec ullamcorper lectus sit amet elit mattis eleifend. Aliquam
                            gravida feugiat sagittis. Vestibulum at sem sit amet tellus consectetur ultrices consectetur
                            nec
                            est. Fusce eget lectus commodo, suscipit dui eu, mattis libero. Vestibulum metus nisi,
                            consequat
                            id ante ac, dignissim placerat quam.
                        </p>
                    </div>

                    <div id="healthcareprovider" class="section scrollspy">
                        <hr id="scrollspyline"/>
                        <a class="btn btn-large" href="<?php echo e(route('register_health_care')); ?>">JOIN AS HEALTH CARE PROVIDER</a>
                        <a class="btn btn-large" href="<?php echo e(route('login_health_care')); ?>">LOGIN</a>
                        <p>
                            Health Care Provider<br/>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non tempor tellus.
                            Pellentesque in pretium tellus. Nulla facilisi. Nunc semper semper finibus. Vestibulum neque
                            mi,
                            condimentum in lobortis non, vehicula quis dolor. Aliquam pellentesque lectus ut faucibus
                            facilisis. Aenean fringilla viverra ex, sed elementum enim aliquet in. Pellentesque et ex
                            faucibus, vestibulum elit nec, venenatis purus. Cras neque magna, rhoncus et viverra in,
                            molestie nec leo. Proin vel erat nisi. Nulla facilisi. Nulla congue risus lacus, nec luctus
                            enim
                            hendrerit vel.

                            Duis non mi molestie, vulputate nunc eget, tempor orci. Cras quis est gravida, tincidunt
                            ipsum
                            et, molestie nulla. Donec interdum lobortis lacus, dictum lobortis sem tempor id. Integer et
                            velit justo. Cras ac convallis lectus. Curabitur ac mollis eros. Duis nec ante sit amet
                            neque
                            euismod faucibus. Aenean lobortis felis tellus, vel porta lorem porta at. Suspendisse non
                            sem
                            mauris. Etiam porta nisl mauris, in luctus eros tincidunt eget.

                            Sed vel viverra nisi, nec pretium elit. Quisque placerat lacus quis ligula accumsan, quis
                            pulvinar dui varius. Vestibulum dapibus, dui in congue ornare, purus nibh posuere tortor, eu
                            pellentesque lacus arcu quis justo. Vestibulum viverra lacus felis, sit amet pellentesque
                            eros
                            sodales non. Aenean ligula enim, hendrerit eu pretium in, viverra et sapien. Aenean
                            facilisis
                            egestas justo vel posuere. Proin mattis sit amet massa sit amet finibus. Praesent tempus
                            volutpat felis vel malesuada. Aenean convallis lacus enim, et pellentesque arcu venenatis
                            et.
                            Vestibulum lacinia varius aliquam. Fusce bibendum porttitor enim, vel volutpat erat
                            hendrerit
                            sit amet. Cras volutpat odio at purus aliquam tincidunt id eu nisi. Donec nec euismod eros.
                            Nullam consequat at nisi non blandit.

                            Proin ut sapien tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere
                            cubilia Curae; Quisque urna eros, congue vel arcu dictum, facilisis dapibus nibh. Nam orci
                            elit,
                            rhoncus vitae enim vitae, auctor laoreet nibh. Donec sed rhoncus arcu. Phasellus convallis
                            congue felis, at pulvinar diam tincidunt non. Nunc justo velit, sagittis nec sollicitudin
                            vitae,
                            maximus in urna. Aenean laoreet mi nec ipsum bibendum, sit amet posuere neque laoreet.
                            Vivamus
                            bibendum viverra scelerisque.

                            Duis a feugiat augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per
                            inceptos himenaeos. Curabitur porttitor ac eros in congue. Aenean placerat nec mi eu
                            egestas.
                            Aliquam erat volutpat. Cras id feugiat neque. Quisque non felis velit. Sed ut mattis mauris,
                            quis mattis nisl. Vivamus quis urna vel lorem maximus rutrum. Nam vitae placerat mi.
                            Pellentesque a nisl non sapien accumsan blandit id eu tortor.

                            Nulla bibendum ante nisi, ut consectetur augue ultrices ut. Quisque suscipit velit tortor,
                            et
                            aliquam quam volutpat et. Donec ullamcorper lectus sit amet elit mattis eleifend. Aliquam
                            gravida feugiat sagittis. Vestibulum at sem sit amet tellus consectetur ultrices consectetur
                            nec
                            est. Fusce eget lectus commodo, suscipit dui eu, mattis libero. Vestibulum metus nisi,
                            consequat
                            id ante ac, dignissim placerat quam.
                        </p>
                    </div>

                    <div id="contactus" class="section scrollspy">
                        <hr id="scrollspyline"/>
                        <p>
                            Contact Us<br/>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non tempor tellus.
                            Pellentesque in pretium tellus. Nulla facilisi. Nunc semper semper finibus. Vestibulum neque
                            mi,
                            condimentum in lobortis non, vehicula quis dolor. Aliquam pellentesque lectus ut faucibus
                            facilisis. Aenean fringilla viverra ex, sed elementum enim aliquet in. Pellentesque et ex
                            faucibus, vestibulum elit nec, venenatis purus. Cras neque magna, rhoncus et viverra in,
                            molestie nec leo. Proin vel erat nisi. Nulla facilisi. Nulla congue risus lacus, nec luctus
                            enim
                            hendrerit vel.

                            Duis non mi molestie, vulputate nunc eget, tempor orci. Cras quis est gravida, tincidunt
                            ipsum
                            et, molestie nulla. Donec interdum lobortis lacus, dictum lobortis sem tempor id. Integer et
                            velit justo. Cras ac convallis lectus. Curabitur ac mollis eros. Duis nec ante sit amet
                            neque
                            euismod faucibus. Aenean lobortis felis tellus, vel porta lorem porta at. Suspendisse non
                            sem
                            mauris. Etiam porta nisl mauris, in luctus eros tincidunt eget.

                            Sed vel viverra nisi, nec pretium elit. Quisque placerat lacus quis ligula accumsan, quis
                            pulvinar dui varius. Vestibulum dapibus, dui in congue ornare, purus nibh posuere tortor, eu
                            pellentesque lacus arcu quis justo. Vestibulum viverra lacus felis, sit amet pellentesque
                            eros
                            sodales non. Aenean ligula enim, hendrerit eu pretium in, viverra et sapien. Aenean
                            facilisis
                            egestas justo vel posuere. Proin mattis sit amet massa sit amet finibus. Praesent tempus
                            volutpat felis vel malesuada. Aenean convallis lacus enim, et pellentesque arcu venenatis
                            et.
                            Vestibulum lacinia varius aliquam. Fusce bibendum porttitor enim, vel volutpat erat
                            hendrerit
                            sit amet. Cras volutpat odio at purus aliquam tincidunt id eu nisi. Donec nec euismod eros.
                            Nullam consequat at nisi non blandit.

                            Proin ut sapien tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere
                            cubilia Curae; Quisque urna eros, congue vel arcu dictum, facilisis dapibus nibh. Nam orci
                            elit,
                            rhoncus vitae enim vitae, auctor laoreet nibh. Donec sed rhoncus arcu. Phasellus convallis
                            congue felis, at pulvinar diam tincidunt non. Nunc justo velit, sagittis nec sollicitudin
                            vitae,
                            maximus in urna. Aenean laoreet mi nec ipsum bibendum, sit amet posuere neque laoreet.
                            Vivamus
                            bibendum viverra scelerisque.

                            Duis a feugiat augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per
                            inceptos himenaeos. Curabitur porttitor ac eros in congue. Aenean placerat nec mi eu
                            egestas.
                            Aliquam erat volutpat. Cras id feugiat neque. Quisque non felis velit. Sed ut mattis mauris,
                            quis mattis nisl. Vivamus quis urna vel lorem maximus rutrum. Nam vitae placerat mi.
                            Pellentesque a nisl non sapien accumsan blandit id eu tortor.

                            Nulla bibendum ante nisi, ut consectetur augue ultrices ut. Quisque suscipit velit tortor,
                            et
                            aliquam quam volutpat et. Donec ullamcorper lectus sit amet elit mattis eleifend. Aliquam
                            gravida feugiat sagittis. Vestibulum at sem sit amet tellus consectetur ultrices consectetur
                            nec
                            est. Fusce eget lectus commodo, suscipit dui eu, mattis libero. Vestibulum metus nisi,
                            consequat
                            id ante ac, dignissim placerat quam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('other_js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.parallax').parallax();
            $(".button-collapse").sideNav();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.hay_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>