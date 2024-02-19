<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/package/update/<?= $package['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('title')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" id="title" value="<?= old('title', $package['title']); ?>" aria-describedby="titlecheck">
                <div class="invalid-feedback" for="titlecheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('title');
                    }; ?>
                </div>
            </div>
        </div>
        <div class="col-3">
            <label for="fee" class="form-label">Fee</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="feecheck">USD $</span>
                <input type="number" name="fee" class="form-control 
                <?php if (session('validation')) {
                    if (session('validation')->getError('fee')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" value="<?= old('fee', $package['fee']); ?>" id="fee" aria-describedby="feecheck">
                <div class="invalid-feedback" for="feecheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('fee');
                    }; ?>
                </div>
            </div>
        </div>
        <div class="col-2">
            <label for="stars" class="form-label">Stars</label>
            <div class="input-group mb-3">
                <input type="number" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('stars')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" value="<?= old('stars', $package['stars']); ?>" name="stars" aria-describedby="starscheck">
                <span class="input-group-text">/5</span>
                <div class="invalid-feedback" for="starscheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('stars');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="caption" class="form-label">Caption</label>
                <input type="text" name="caption" class="form-control" id="title" value="<?= old('caption', $package['caption']); ?>">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                <div class="invalid-feedback" for="imagecheck">
                    <?php if (isset($validation)) : ?>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="col">
                <div class="mb-3">
                    <label for="rundown" class="form-label">Rundown</label>
                    <textarea class="form-control" id="rundown" name="rundown" rows="5"><?= old('rundown', $package['rundown']); ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<?= $this->endSection('content'); ?>



<div class="card-body">
    <h2><b>Day 1&nbsp;&nbsp;</b></h2>
    <ul>
        <li>GWK (Garuda Wisnu Kencana)</li>
        <li>Uluwatu Temple and Watching Kecak Dance&nbsp;</li>
        <li>Dinner at Jimbaran Bay&nbsp;</li>
    </ul>
    <h3>Highlights</h3>
    <ul>
        <li>See the beauty of the Garuda Wisnu Kencana&nbsp;</li>
        <li>Enjoy Balinese dance culture at Uluwatu Temple&nbsp;</li>
        <li>Enjoy watching Kecak Dance&nbsp;</li>
    </ul>
    <h3>Description</h3>
    <p>One of the most popular tourist destinations among foreign and domestic tourists, with the flagship of the largest statue in Bali, namely the Garuda Wisnu Kencana Statue which is estimated to be higher than the statue of liberty. With a design that is very thick with the characteristics of Balinese carvings, this statue is one of the best statues and is used as an icon of this beloved island of Bali.&nbsp;&nbsp;</p>
    <p>Next trip go to Uluwatu Temple is located in Uluwatu. You will enjoy the stunning sunset Uluwatu temple while watching the Kecak Fire Dance right there, and enjoy your dinner at Jimbaran, precisely at Jimbaran Bay on the southwest coast of Bali. Your dinner will be served with Balinese seafood on the beach, which will give you a great experience of Jimbaran dinner.&nbsp;</p>
    <h3>Including</h3>
    <ul>
        <li>Dinner&nbsp;</li>
        <li>All entrance ticket fees&nbsp;</li>
        <li>Free Mineral Water&nbsp;</li>
        <li>Including Petrol&nbsp;&nbsp;</li>
    </ul>
    <p><br></p>
    <h2><b>Day 2&nbsp;</b></h2>
    <ul>
        <li>Tegenung Waterfall&nbsp;</li>
        <li>Temen Village&nbsp;</li>
        <li>Tegalalang (Rice Paddy Field)&nbsp;</li>
        <li>Kintamani Volcano&nbsp;</li>
    </ul>
    <h3>Highlights</h3>
    <ul>
        <li>Enjoy the beauty of Tegenungan Waterfall&nbsp;</li>
        <li>Enjoy the coffee plantation of Temen Village&nbsp;</li>
        <li>Get an amazing view of Mount Batur Kintamani while enjoying your special Indonesian lunch while overlooking the active volcano.&nbsp;</li>
    </ul>
    <h3>Description</h3>
    <p>After morning pick up from your hotel, first place will be Tegenungan Waterfall. You can admire the lush green surroundings and enjoy the splashing of the waterfalls while taking a dip in the pool below the falls.&nbsp;</p>
    <p>The next spot is Friends Village. Friends village where we have seen the Bali&nbsp;</p>
    <p>Coffee plantation, in this plantation you can see and take photos of the animal Luwak which is very popular in Bali for making the best coffee. Then try a presentation about agricultural products where visitors are free to drink coffee on the plantation.&nbsp;&nbsp;</p>
    <p>After that to Tegalalang (Rice Fields). The Tegallalang Rice Terraces are located in a valley that offers incredible views of the terraced terraces and the surrounding green landscape. Apart from those in the villages of Pejeng and Campuhan, the Tegallalang Rice Fields form three of the most stunning terraced landscapes in the Ubud area.&nbsp;</p>
    <p>At the end of the day Get a stunning view of Mount Batur Kintamani while enjoying an Indonesian lunch overlooking the active volcano.&nbsp;</p>
    <h3>Including</h3>
    <ul>
        <li>Lunch&nbsp;</li>
        <li>All entrance ticket fees&nbsp;</li>
        <li>Free Mineral Water&nbsp;</li>
        <li>Including Petrol&nbsp;&nbsp;</li>
    </ul>
    <p>&nbsp;</p>
    <h2><b>Day 3&nbsp;</b></h2>
    <ul>
        <li>Pick up at 02:30 am go to lovina&nbsp;</li>
        <li>Watching Dolphin&nbsp;</li>
        <li>Lunch&nbsp;</li>
        <li>Gigit Waterfull&nbsp;</li>
        <li>Bali Handara Gate&nbsp;</li>
    </ul>
    <h3>Highlights</h3>
    <ul>
        <li>Watch the sunrise at Lovina Beach&nbsp;</li>
        <li>Seeing the beauty of the dolphins jumping over the sea&nbsp;</li>
        <li>Enjoy Gitgit Waterfall&nbsp;</li>
        <li>Visit to Bali Handara Gate&nbsp;</li>
    </ul>
    <h3>Description</h3>
    <p>Start your morning on a full day trip that will introduce you to the natural beauty of North Bali. You will be picked up at your accommodation at 02:30 AM and you will immediately be taken to Lovina Beach. Take a boat that will take you out to watch dolphins playing in the sea of ??their natural homes while admiring the amazing sunrise in Bali.&nbsp;</p>
    <p>let's continue the journey to the Gitgit Waterfall to see the wonders of every natural landscape you pass to the location of the waterfall.&nbsp;</p>
    <p>On the way back to the hotel, you will stop at the Handara Gate, known as the gate of heaven with the hills and green trees with the fog view! This place definitely makes you a wonderful memory during your trip in Bali!&nbsp;</p>
    <h3>Including</h3>
    <ul>
        <li>Lunch&nbsp;</li>
        <li>All entrance ticket fees&nbsp;</li>
        <li>Free Mineral Water&nbsp;</li>
        <li>Including Petrol&nbsp;&nbsp;</li>
    </ul>
    <p>&nbsp;</p>
    <h2><b>Day 4&nbsp;</b></h2>
    <ul>
        <li>ATV&nbsp;</li>
        <li>Lunch&nbsp;</li>
        <li>Ayung River Rafting&nbsp;</li>
    </ul>
    <h3>Highlights</h3>
    <ul>
        <li>Drive the ATV car on the challenging paths&nbsp;</li>
        <li>Feel the adrenaline of riding an ATV which through the forests, rice fields also rivers.&nbsp;</li>
        <li>Enjoy the driving sensation that challenges your adrenaline&nbsp;</li>
        <li>Experience the sensation of rafting in white water&nbsp;</li>
        <li>Admire beautiful stone carvings along the river&nbsp;</li>
        <li>Enjoy an Indonesian buffet lunch at the restaurant&nbsp;</li>
    </ul>
    <h3>Description</h3>
    <p>This activity provides a different driving experience that doesn't like driving on a highway. Challenging and varied tracks will make you feel like a racer! Test your abilities so this makes you want more adventure. Before turn to this very challenging track, the instructor will give you a briefing to know how to drive on the track that really challenges your adrenaline because driving activities are not like driving in general. After you receive your helmet, you will choose your vehicle and have a brief warm-up session. After that, you will be driving to the natural trekking, guided by a very experienced guide. The guide will capture your moment in the middle of the road so you can remember this unforgettable trip forever.&nbsp;</p>
    <p>At the end of the day, you will return to the starting place to bath your body. Then, take your time to relax while enjoying the food in a cozy atmosphere.&nbsp;</p>
    <p>In the Ayung River Rafting, the professional guide will give you an instruction to guide you on how to navigate the Ayung River. After choosing rafting equipment such as a life jacket, helmet, and paddle. You will be going to the river by rubber boat and there you can bring your phone or camera also to capture your moment because the guide will provide you a waterproof pouch. During the river, there are so many spots to take photos or take a break. This adventure takes approximately 2.5 hours through the long river path while admiring the beautiful cliffs of the Ayung river.&nbsp;</p>
    <p>At the end of the day, you will return to the starting place to enjoy the food, snack or just drink a cup of coffee or tea.&nbsp;</p>
    <h3>Including</h3>
    <ul>
        <li>Lunch&nbsp;</li>
        <li>All entrance ticket fees&nbsp;</li>
        <li>Free Mineral Water&nbsp;</li>
        <li>Including Petrol&nbsp;&nbsp;</li>
    </ul>
    <p><br></p>
    <h2><b>Day 5&nbsp;&nbsp;</b></h2>
    <ul>
        <li>Taman Ayun Temple&nbsp;</li>
        <li>Ulundanu Bratan Temple&nbsp;</li>
        <li>Lunch&nbsp;</li>
        <li>Tanah Lot Temple&nbsp;</li>
    </ul>
    <h3>Highlights&nbsp;</h3>
    <ul>
        <li>Enjoy a full day tour and discover Balinese culture with the famous temples&nbsp;</li>
        <li>Enjoy the beauty of the lake at Ulun Danu Beratan temple&nbsp;</li>
        <li>Enjoy the beautiful sunset view in Tanah Lot temple&nbsp;</li>
    </ul>
    <h3>Description</h3>
    <p>Your first stop is in the iconic Taman Ayun Temple, a temple complex with lush gardens, water ponds with beautiful architecture with the uniqueness temple like a pagoda that has a multilevel black roof. Enjoy the tranquility of the garden surrounded by ponds while watching and learn about the history of Hinduism in Bali.&nbsp;</p>
    <p>Next, the Journey Ulun Danu Bratan Temple, this temple is perfect for you who like the uniqueness of Balinese architecture with the beautiful flower gardens and the unspoiled natural environment. The temple on the edge of the lake was built for honor Dewi Danu, the goddess of the lake formed by a volcanic eruption 30,000 years ago.&nbsp;&nbsp;</p>
    <p>After Lunch, Visit to the journey continues to the Tanah Lot temple which is a very sacred temple standing firmly on a rock surrounded by the sea. Watch the waves around the temple while admiring the sunset towards the night in the background of the Tanah Lot temple.&nbsp;</p>
    <h3>Including</h3>
    <ul>
        <li>Lunch&nbsp;</li>
        <li>All entrance ticket fees&nbsp;</li>
        <li>Free Mineral Water&nbsp;</li>
        <li>Including Petrol</li>
    </ul>
</div>