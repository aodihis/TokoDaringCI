<?php

    if($status == 'waiting'){
        $badge_status   =   'badge-primary';
        $status_name    =   'Menunggu Pembayaran';
    }

    if($status == 'paid'){
        $badge_status   =   'badge-secondary';
        $status_name    =   'Sudah Dibayar';
    }

    if($status == 'delivered'){
        $badge_status   =   'badge-success';
        $status_name    =   'Dikirim';
    }

    if($status == 'cancel'){
        $badge_status   =   'badge-danger';
        $status_name    =   'Dibatalkan';
    }
?>

<?php if($status_name) :?>
    <span class="badge badge-pill <?=$badge_status?>"><?=$status_name?></span>
<?php endif ?>