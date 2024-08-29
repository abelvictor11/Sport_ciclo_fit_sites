<?php
    $interests = get_field('interest');
?>
<section>
<div class="container">
    <div class="row">
        <?php if($interests): ?>
            <div class="col-12">
                <h4 class="title-interest">Te puede interesar</h4>
                <div class="owl-carousel interest owl-theme">
                    <?php foreach($interests as $interest): ?>
                        <div class="item">
                            <a href="<?= home_url(); ?>/categoria/<?= $interest['category']->slug; ?>">
                                <div class="icon">
                                    <img src="<?= $interest['icon']['url'] ?>" alt="<?= $interest['icon']['title'] ?>" title="<?= $interest['icon']['title'] ?>" width="40px" height="40px">
                                </div>
                                <p class="mt-4"><?= $interest['category']->name ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</section>