<?php $__env->startSection('pagename'); ?>
-
<?php if(empty($category)): ?>
<?php echo e(__('All')); ?>

<?php else: ?>
<?php echo e(convertUtf8($category->name)); ?>

<?php endif; ?>
<?php echo e(__('Jobs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta-keywords', "$be->career_meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$be->career_meta_description"); ?>

<?php $__env->startSection('content'); ?>
<!--   breadcrumb area start   -->
<div class="breadcrumb-area jobs"
    style="background-image: url('<?php echo e(asset('assets/front/img/' . $bs->breadcrumb)); ?>');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt"style="
        padding: 5px;
    ">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    
                    <ul class="breadcumb"style="
                    padding: 10px;
                    margin-top: 0;
                ">
                        <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                        <li><?php echo e(__('Career')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"
        style="background-color: #<?php echo e($be->breadcrumb_overlay_color); ?>;opacity: <?php echo e($be->breadcrumb_overlay_opacity); ?>;">
    </div>
</div>
<!--   breadcrumb area end    -->
<section style="color: rgb(33, 37, 41); font-family: montserrat; font-size: 16px;">
    <div class="container" style="width: 1160px; max-width: 1160px;">
        <h2 class="round-title text"
            style="margin-bottom: 100px; font-weight: 700; line-height: 1.2; font-size: 27px; text-transform: uppercase; font-family: oswald; text-align: center; position: relative; z-index: 1; color: rgb(19, 19, 19);">
            CAREERS</h2>
        <div class="row align-items-top flex-column-reverse flex-lg-row">
            <div class="col-lg-7 col-12 pt-4 pt-lg-0 pl-lg-3 pl-xl-3"
                style="width: 676.656px; flex-basis: 58.3333%; max-width: 58.3333%;">
                <p style="line-height: 30px; text-align: justify;"></p>
                <p style="line-height: 30px; text-align: justify;">Our industry never sleeps, we continue to perform
                    moves all year around, sunshine, rain or snow we have moved in it all. This means that we are always
                    excited to grow our team of professionals as our business continues to expand. To join the exciting
                    Metropolitan Movers family see our career options and their requirements below and we would love to
                    hear from you!</p>
            </div>
            <div class="mt-3 mt-md-3 col-12 col-lg-5 text-center"
                style="width: 483.328px; flex-basis: 41.6667%; max-width: 41.6667%;"><a
                    href="https://www.metropolitanmovers.ca/careers#" class="modal-video video-btn" data-toggle="modal"
                    data-src="https://www.youtube.com/embed/ORuh8RqC9m0" data-target="#myModal"
                    style="color: rgb(0, 123, 255);"><img
                        src="https://www.metropolitanmovers.ca/wp-content/uploads/2020/04/how-to-choose-video-place-holder.jpg"
                        alt="Careers" class="img-fluid">&nbsp;</a><img class="pt-3 w-75"
                    src="https://www.metropolitanmovers.ca/wp-content/uploads/2020/04/media-divider-single.jpg"
                    style="width: 339.984px;">
                <p style="line-height: 30px;"><span style="font-weight: bolder;">How To Choose A Moving Company</span>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container mb-2"
    style="width: 1160px; max-width: 1160px; color: rgb(33, 37, 41); font-family: montserrat; font-size: 16px;">
    <div class="row align-items-center">
        <div class="col-12 col-lg-5 pl-lg-10" style="width: 483.328px; flex-basis: 41.6667%; max-width: 41.6667%;"><img
                src="https://www.metropolitanmovers.ca/wp-content/uploads/2020/05/IMG_20180824_150533.jpg" alt="Movers"
                class="img-fluid float-right" style="margin-bottom: 22.6562px;"></div>
        <div class="pl-lg-5 col-12 col-lg-7" style="width: 676.656px; flex-basis: 58.3333%; max-width: 58.3333%;"><span
                style="font-weight: bolder;">Movers</span>
            <p style="line-height: 30px; text-align: justify;"></p>
            <p style="line-height: 30px; text-align: justify;">A Mover is the face of our company, therefore we are
                looking for someone presentable, honest and caring that will value our company standards and the
                client’s home or business. As a Metropolitan Movers Mover, you will help prepare and pack customers’
                items to prevent damage during transit. You will need to be able to work with tools and assemble and
                disassemble furniture. You should be able to lift, load and unload heavy boxes and items like furniture,
                pianos and pool tables. You will need to arrange items in the truck and play life-size Tetris, to
                maximize the capacity and efficiency of the move, this ability is highly valued in this business and by
                the client. You will take inventory should items go into storage and be able to answer customers’
                questions and address requests they have during the full moving process. Having a positive attitude and
                a caring personality is what will make you shine and become a top-performing mover at Metropolitan
                Movers.</p>
        </div>
    </div>
</div>
<div class="container mb-2"
    style="width: 1160px; max-width: 1160px; color: rgb(33, 37, 41); font-family: montserrat; font-size: 16px;">
    <div class="row align-items-center flex-column-reverse flex-lg-row">
        <div class="col-12 col-lg-7" style="width: 676.656px; flex-basis: 58.3333%; max-width: 58.3333%;"><span
                style="font-weight: bolder;">Driver</span>
            <p style="line-height: 30px; text-align: justify;"></p>
            <p style="line-height: 30px; text-align: justify;">A Driver position takes a strong, focused, responsible
                and punctual individual. As a driver, you will be responsible to drive the truck for local jobs and
                long-distance jobs. You must be qualified and comfortable in operating heavy and large trucks of various
                sizes. To operate the truck you must have a valid G Full driver’s license and demonstrate adequate
                driving experience. Previous truck/ large vehicle driving experience is an asset. The driver is often
                the team leader on the job and must ensure that the team performance is professional, courteous and
                efficient. You will be responsible to assist the movers with heavy lifting and participate throughout
                the moving process. We put our trust in you with all the valued equipment placed in your hands and
                therefore your responsibility and professionalism will be what makes you a Metropolitan Movers valued
                family member.</p>
        </div>
        <div class="col-12 col-lg-5" style="width: 483.328px; flex-basis: 41.6667%; max-width: 41.6667%;"><img
                src="https://www.metropolitanmovers.ca/wp-content/uploads/2020/05/IMG_20180824_113736.jpg" alt="Driver"
                class="img-fluid float-left" style="height: 400px; margin-bottom: 22.6562px;"></div>
    </div>
</div>
<div class="container mb-2"
    style="width: 1160px; max-width: 1160px; color: rgb(33, 37, 41); font-family: montserrat; font-size: 16px;">
    <div class="row align-items-center">
        <div class="col-12 col-lg-5" style="width: 483.328px; flex-basis: 41.6667%; max-width: 41.6667%;"><img
                src="https://www.metropolitanmovers.ca/wp-content/uploads/2020/05/IMG_20180824_145148.jpg"
                alt="Crew Manager" class="img-fluid float-right" style="height: 400px; margin-bottom: 22.6562px;"></div>
        <div class="pl-lg-5 col-12 col-lg-7" style="width: 676.656px; flex-basis: 58.3333%; max-width: 58.3333%;"><span
                style="font-weight: bolder;">Crew Manager</span>
            <p style="line-height: 30px; text-align: justify;"></p>
            <p style="line-height: 30px; text-align: justify;">As a crew manager, you must have some moving experience.
                Usually, this position is given to someone who has worked as a mover or a driver within the company and
                has earned the respect of the movers and the management team. You will act as the godfather of all the
                movers at your unit. They will approach you for your advice, look for your assistance and rely on you
                for your professionalism. You will have constant communication with the moving team while they are on
                the job to ensure that they have everything they need in order to complete a successful move. You must
                assess the suitability of each staff member and assign them and the correct truck to the jobs where they
                can perform their best. You will also be responsible to discuss the schedule and availability of each
                mover. You will be responsible to collect all paperwork, contracts and ensure all records are maintained
                accurately and payments are processed. This position requires you to be an active listener, reliable,
                honest, patient and caring for each member of the operation.</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("front.$version.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\logistics\core\resources\views/front/career.blade.php ENDPATH**/ ?>