<script src="/templates/scripts/jquery-2.1.4.js"></script>

<!--<link href="/templates/test/css/bootstrap.css" rel="stylesheet">-->
<script src="/templates/test/js/bootstrap.js" type="text/javascript"></script>

<link href="/templates/css/main.css" rel="stylesheet">





<!--
                <ul class="slider_gallery">
                    <?php /*foreach ($returnParams as $image): */?>
                        <li class="asdf"  id="<?php /*echo $image['id']; */?>">
                            <img src="<?php /*echo $image['linkfull']; */?>">
                        </li>
                    <?php /*endforeach; */?>
                </ul>
                -->

<a href="#modal" role="button" class="btn" data-toggle="modal">Click Me</a>

<div id="modal" class="modal">
	<div class="modal header">

	</div>
	<div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <ul class="slider_gallery">
            <?php foreach ($returnParams as $image): ?>
            <li class="asdf"  id="<?php echo $image['id']; ?>">
                <img src="<?php echo $image['linkfull']; ?>">
            </li>
            <?php endforeach; ?>
        </ul>

	</div>
    <script>
        $(document).ready(function(){
            $('.slider_gallery').each(function(){
                var obj = $(this);

                $(obj).find()
            })
        })
    </script>
</div>

