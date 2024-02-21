<?= $this->extend('backoffice/template'); ?>

<?= $this->section('content'); ?>

<form action="/backoffice/faq/save" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" name="question" class="form-control
                <?php if (session('validation')) {
                    if (session('validation')->getError('question')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" id="question" value="<?= old('question'); ?>" aria-describedby="questioncheck">
                <div class="invalid-feedback" for="questioncheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('question');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <input type="text" name="answer" class="form-control 
                <?php if (session('validation')) {
                    if (session('validation')->getError('answer')) {
                        echo 'is-invalid';
                    }
                    echo '';
                } ?>" value="<?= old('answer'); ?>" id="answer" aria-describedby="answercheck">
                <div class="invalid-feedback" for="answercheck">
                    <?php if (session('validation')) {
                        echo session('validation')->getError('answer');
                    }; ?>
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