<?php

/**
 * Template Name: Careers
 */

 get_header();

    echo '<section class="position-relative pt-5 pb-5" style="">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-6 col-cards" style="height:80vh;overflow:scroll;">';

    echo '<div class="d-md-block d-none">';
    if(have_rows('careers')):

    $careersCounterCard = 0;
    while(have_rows('careers')): the_row();
    $title = get_sub_field('title');
    $ID = sanitize_title_with_dashes($title);
    $description = get_sub_field('full_description');
    $careersCounterCard++;

    if($careersCounterCard == 1){
        echo '<div class="position-relative bg-white mb-3 p-3 col-card col-card-active" style="border-radius:8px;border:1px solid #d4d2d0;" id="card-' . $ID . '">';
    } else {
        echo '<div class="position-relative bg-white mb-3 p-3 col-card" style="border-radius:8px;border:1px solid #d4d2d0;" id="card-' . $ID . '">';
    }
        echo '<h2 class="h5">' . $title . '</h2>';
        echo '<span class="text-gray">' . get_sub_field('location') . '</span>';
        echo '<div class="d-flex flex-lg-nowrap flex-wrap">';
        echo '<div class="job-details-card pt-1 pb-1 pl-2 pr-2 mr-1 mb-1 d-inline-block text-gray" style="border-radius:0.25rem;background:#f3f2f1;">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 13" role="presentation" aria-hidden="true" aria-label="Salary"><defs></defs><path fill="#595959" fill-rule="evenodd" d="M2.45168 6.10292c-.30177-.125-.62509-.18964-.95168-.1903V4.08678c.32693-.00053.6506-.06518.95267-.1903.30331-.12564.57891-.30979.81105-.54193.23215-.23215.4163-.50775.54194-.81106.12524-.30237.18989-.62638.19029-.95365H9.0902c0 .3283.06466.65339.1903.9567.12564.30331.30978.57891.54193.81106.23217.23215.50777.41629.81107.54193.3032.12558.6281.19024.9562.1903v1.83556c-.3242.00155-.6451.06616-.9448.19028-.3033.12563-.5789.30978-.81102.54193-.23215.23214-.4163.50774-.54193.81106-.12332.2977-.18789.61638-.19024.93849H3.99496c-.00071-.32645-.06535-.64961-.19029-.95124-.12564-.30332-.30979-.57891-.54193-.81106-.23215-.23215-.50775-.4163-.81106-.54193zM0 .589843C0 .313701.223858.0898438.5.0898438h12.0897c.2762 0 .5.2238572.5.5000002V9.40715c0 .27614-.2238.5-.5.5H.5c-.276143 0-.5-.22386-.5-.5V.589843zM6.54427 6.99849c1.10457 0 2-.89543 2-2s-.89543-2-2-2-2 .89543-2 2 .89543 2 2 2zm8.05523-2.69917v7.10958H2.75977c-.27615 0-.5.2238-.5.5v.5c0 .2761.22385.5.5.5H15.422c.4419 0 .6775-.2211.6775-.6629V4.29932c0-.27615-.2239-.5-.5-.5h-.5c-.2761 0-.5.22385-.5.5z" clip-rule="evenodd"></path></svg>';
        echo  '<span class="small">' . get_sub_field('salary') . '</span>';
        echo '</div>';
        echo '<div class="job-details-card pt-1 pb-1 pl-2 pr-2 mr-1 mb-1 d-inline-block text-gray" style="border-radius:0.25rem;background:#f3f2f1;">';
        echo '<svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true"><path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path><path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path></svg>';
        echo  '<span class="small">' . get_sub_field('job_type') . '</span>';
        echo '</div>';
        echo '<div class="job-details-card pt-1 pb-1 pl-2 pr-2 mr-1 mb-1 d-inline-block text-gray" style="border-radius:0.25rem;background:#f3f2f1;">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path></svg>';
        echo  '<span class="small">' . get_sub_field('shift') . '</span>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="text-gray small pt-3">';
        echo truncate($description, 75);
        echo '</div>';
        
        echo '</div>';


    endwhile;

endif;
echo '</div>';


// echo '</div>';

    echo '<div class="d-md-none d-block">';
    echo '<div class="col-card-carousel owl-carousel owl-theme">';
 if(have_rows('careers')):

    $careersCounterCard = 0;
    while(have_rows('careers')): the_row();
    $title = get_sub_field('title');
    $ID = sanitize_title_with_dashes($title);
    $description = get_sub_field('full_description');
    $careersCounterCard++;

    if($careersCounterCard == 1){
        echo '<div class="position-relative bg-white mb-3 p-3 col-card col-card-active" style="border-radius:8px;border:1px solid #d4d2d0;" id="card-' . $ID . '">';
    } else {
        echo '<div class="position-relative bg-white mb-3 p-3 col-card" style="border-radius:8px;border:1px solid #d4d2d0;" id="card-' . $ID . '">';
    }
        echo '<h2 class="h5">' . $title . '</h2>';
        echo '<span class="text-gray">' . get_sub_field('location') . '</span>';
        echo '<div class="d-flex flex-lg-nowrap flex-wrap">';
        echo '<div class="job-details-card pt-1 pb-1 pl-2 pr-2 mr-1 mb-1 d-inline-block text-gray" style="border-radius:0.25rem;background:#f3f2f1;">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 13" role="presentation" aria-hidden="true" aria-label="Salary"><defs></defs><path fill="#595959" fill-rule="evenodd" d="M2.45168 6.10292c-.30177-.125-.62509-.18964-.95168-.1903V4.08678c.32693-.00053.6506-.06518.95267-.1903.30331-.12564.57891-.30979.81105-.54193.23215-.23215.4163-.50775.54194-.81106.12524-.30237.18989-.62638.19029-.95365H9.0902c0 .3283.06466.65339.1903.9567.12564.30331.30978.57891.54193.81106.23217.23215.50777.41629.81107.54193.3032.12558.6281.19024.9562.1903v1.83556c-.3242.00155-.6451.06616-.9448.19028-.3033.12563-.5789.30978-.81102.54193-.23215.23214-.4163.50774-.54193.81106-.12332.2977-.18789.61638-.19024.93849H3.99496c-.00071-.32645-.06535-.64961-.19029-.95124-.12564-.30332-.30979-.57891-.54193-.81106-.23215-.23215-.50775-.4163-.81106-.54193zM0 .589843C0 .313701.223858.0898438.5.0898438h12.0897c.2762 0 .5.2238572.5.5000002V9.40715c0 .27614-.2238.5-.5.5H.5c-.276143 0-.5-.22386-.5-.5V.589843zM6.54427 6.99849c1.10457 0 2-.89543 2-2s-.89543-2-2-2-2 .89543-2 2 .89543 2 2 2zm8.05523-2.69917v7.10958H2.75977c-.27615 0-.5.2238-.5.5v.5c0 .2761.22385.5.5.5H15.422c.4419 0 .6775-.2211.6775-.6629V4.29932c0-.27615-.2239-.5-.5-.5h-.5c-.2761 0-.5.22385-.5.5z" clip-rule="evenodd"></path></svg>';
        echo  '<span class="small">' . get_sub_field('salary') . '</span>';
        echo '</div>';
        echo '<div class="job-details-card pt-1 pb-1 pl-2 pr-2 mr-1 mb-1 d-inline-block text-gray" style="border-radius:0.25rem;background:#f3f2f1;">';
        echo '<svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true"><path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path><path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path></svg>';
        echo  '<span class="small">' . get_sub_field('job_type') . '</span>';
        echo '</div>';
        echo '<div class="job-details-card pt-1 pb-1 pl-2 pr-2 mr-1 mb-1 d-inline-block text-gray" style="border-radius:0.25rem;background:#f3f2f1;">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path></svg>';
        echo  '<span class="small">' . get_sub_field('shift') . '</span>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="text-gray small pt-3">';
        echo truncate($description, 75);
        echo '</div>';
        
        echo '</div>';


    endwhile;

endif;
echo '</div>';
echo '</div>';


echo '</div>';


echo '<div class="col-md-6">';
echo '<div class="position-relative bg-white h-100" style="border-radius:8px;border:1px solid #d4d2d0;">';
if(have_rows('careers')):
    
    $careersCounter = 0;
    while(have_rows('careers')): the_row();
    $careersCounter++;
    $title = get_sub_field('title');
    $ID = sanitize_title_with_dashes($title);
    $description = get_sub_field('full_description');

    if($careersCounter == 1){

        echo '<div class="col-main-details active" id="col-main-details-' . $ID . '">';
        echo '<div class="position-relative p-3" style="box-shadow: 0 2px 4px rgba(0,0,0,.08);">';

        echo '<h2 class="h5">' . $title . '</h2>';
        echo '<span class="text-gray">' . get_sub_field('location') . '</span>';
        echo '<br>';
        echo '<span class="text-gray">' . get_sub_field('salary') . ' - ' . get_sub_field('job_type') . '</span>';
        echo '<br>';
        echo '<span class="bg-accent-outline btn btn-lg mt-3 text-accent apply-now open-modal" id="apply-now" target="_self">Apply Now</span>';
        echo '</div>';
        echo '<div class="" style="height:57vh;overflow:scroll;">';
        // start of job details
        echo '<div class="pt-4 pb-4 p-3" style="border:0.0625rem solid #e4e2e0;">';
        echo '<h2>Job Details</h2>';
        echo '<h3 class="mt-4">Salary</h3>';
        echo '<div class="small text-gray">' . get_sub_field('salary') . '</div>';
        echo '<h3 class="mb-0 mt-4">Job Type</h3>';
        echo '<div class="small text-gray">' . get_sub_field('job_type') . '</div>';
        echo '</div>';
        if(have_rows('qualifications')):
            echo '<div class="pt-4 pb-4 p-3" style="border:0.0625rem solid #e4e2e0;">';
            echo '<h3 class="mb-0 mt-4">Qualifications</h3>';
            echo '<ul class="">';
            while(have_rows('qualifications')): the_row();
                echo '<li class="" style="">' . get_sub_field('qualification') . '</li>';
            endwhile;
            echo '</ul>';
            echo '</div>';
        endif;
        if(have_rows('benefits')):
            echo '<div class="pt-4 pb-4 p-3" style="border:0.0625rem solid #e4e2e0;">';
            echo '<h3 class="mb-0 mt-4">Benefits</h3>';
            echo '<ul class="d-flex flex-wrap p-0 list-unstyled">';
            while(have_rows('benefits')): the_row();
                echo '<li class="small p-1 mr-2 mb-2" style="border-radius:4px;border:1px solid #d4d2d0;">' . get_sub_field('benefit') . '</li>';
            endwhile;
            echo '</ul>';
            echo '</div>';
        endif;
        echo '<div class="pt-4 pb-4 p-3" style="">';
        echo '<h3 class="mb-0 mt-4">Full Job Description</h3>';
        echo get_sub_field('full_description');
        echo '</div>';
        
        // end of job details
        echo '</div>';
        echo '</div>';

    } else {

        echo '<div class="col-main-details" id="col-main-details-' . $ID . '">';
        echo '<div class="position-relative p-3" style="box-shadow: 0 2px 4px rgba(0,0,0,.08);">';

        echo '<h2 class="h5">' . $title . '</h2>';
        echo '<span class="text-gray">' . get_sub_field('location') . '</span>';
        echo '<br>';
        echo '<span class="text-gray">' . get_sub_field('salary') . ' - ' . get_sub_field('job_type') . '</span>';
        echo '<br>';
        echo '<a class="bg-accent-outline btn btn-lg mt-3 apply-now open-modal" id="apply-now" href="#" target="_self">Apply Now</a>';
        echo '</div>';
        echo '<div class="" style="height:55vh;overflow:scroll;">';
        // start of job details
        echo '<div class="pt-4 pb-4 p-3" style="border:0.0625rem solid #e4e2e0;">';
        echo '<h2>Job Details</h2>';
        echo '<h3 class="mt-4">Salary</h3>';
        echo '<div class="small text-gray">' . get_sub_field('salary') . '</div>';
        echo '<h3 class="mb-0 mt-4">Job Type</h3>';
        echo '<div class="small text-gray">' . get_sub_field('job_type') . '</div>';
        echo '</div>';
        echo '<div class="pt-4 pb-4 p-3" style="border:0.0625rem solid #e4e2e0;">';
        echo '<h3 class="mb-0 mt-4">Qualifications</h3>';
        if(have_rows('qualifications')):
            echo '<ul class="">';
            while(have_rows('qualifications')): the_row();
                echo '<li class="" style="">' . get_sub_field('qualification') . '</li>';
            endwhile;
            echo '</ul>';
        endif;
        echo '</div>';
        echo '<div class="pt-4 pb-4 p-3" style="border:0.0625rem solid #e4e2e0;">';
        echo '<h3 class="mb-0 mt-4">Benefits</h3>';
        if(have_rows('benefits')):
            echo '<ul class="d-flex flex-wrap p-0 list-unstyled">';
            while(have_rows('benefits')): the_row();
                echo '<li class="small p-1 mr-2 mb-2" style="border-radius:4px;border:1px solid #d4d2d0;">' . get_sub_field('benefit') . '</li>';
            endwhile;
            echo '</ul>';
        endif;
        echo '</div>';
        echo '<div class="pt-4 pb-4 p-3" style="">';
        echo '<h3 class="mb-0 mt-4">Full Job Description</h3>';
        echo get_sub_field('full_description');
        echo '</div>';
        
        // end of job details
        echo '</div>';
        echo '</div>';

    }
    
endwhile;

endif;
echo '</div>';
echo '</div>';



echo '</div>';
echo '</div>';

echo '</section>';

echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3" style="opacity:0;">';
echo '<div class="bg-overlay"></div>';
echo '<div class="bg-content">';
echo '<div class="bg-content-inner">';
echo '<div class="close" id="">X</div>';
echo '<div>';
echo do_shortcode('[gravityform id="2" title="true" description="false" ajax="true"]');
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';

 get_footer();

?>