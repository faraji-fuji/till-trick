<tr>
    <td>
        <div class="d-flex align-items-center">
            <img src="../assets/avatars/<?= $profile_photo ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
            <div class="ms-3">
                <p class="fw-bold mb-1"><?= $first_name . " " . $last_name ?></p>
            </div>
        </div>
    </td>
    <td>
        <p class="fw-normal mb-1"><?= $member_type ?></p>
    </td>
    <td>
        <p class="text-muted mb-0"><?= $user_location ?></p>
    </td>
    <td>
        <p class="text-muted mb-0"><?= $email_address ?></p>
        <p class="text-muted mb-0"><?= $phone ?></p>
    </td>
    <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
            Edit
        </button>
    </td>
</tr>