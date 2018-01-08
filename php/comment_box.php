<?php if (isset($GLOBALS['comments']) && is_array($comments)) ; ?>
<?php foreach ($comments as $key => $comment): ?>
    <?php $user = Subscribers::getSubscriber($comment->userId); ?>
    <li class="comment-holder" id="_1=<?php echo $comment->comment_id; ?>">
        <div class="user-img">
            <img src="<?php echo $user->profile_img; ?>" class="user-img-pic">
        </div>
        <div class="comment-body">
            <h3 class="username-field"><?php echo $user->userName; ?></h3>
            <div class="comment-text"><?php echo $comment->comment; ?></div>
        </div>

        <div class="comment-buttons-holder">
            <ul>
                <li id="<?php echo $comment->comment_id; ?>" class="delete-btn">&times</li>
            </ul>
        </div>
    </li>
<?php endforeach; ?>