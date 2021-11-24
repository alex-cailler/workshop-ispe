<section class="section <?= get_field('content_background') ? 'bg-lighter' : 'bg-white' ?>">

    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center"><?php the_field('content_title'); ?></h2>
                <div class="d-flex justify-content-center">
                    <p style="width: 400px" class="text-center text-muted has-sm-font-size mt-5 mb-5 <?= get_field('content_bold') ? 'fw-500' : 'fw-light' ?>"><?php the_field('content_description'); ?></p>
                </div>
                <InnerBlocks />
            </div>

        </div>
    </div>

</section>