<!-- Post Popup -->
<div id="post_popup">
    <div class="post-form-box">
        <div class="box-close"><a href="#" class="post_popup_close"><i class="material-icons">close</i></a></div>
        <div class="post-form-box-header">
            <h2>Submit to <a href="#">Subsite</a></h2>
            <h3>as: <a href="#">Username</a></h3>
        </div>
        <hr>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="post_title">Title*</label>
            <input type="text" id="post_title" placeholder="Max 150 characters" required>
            <label for="post_url">URL</label>
            <input type="text" id="post_url">
            <label for="file_upload">File Upload</label>
            <input type="file" name="files" id="file_upload" required>
            <label for="post_text">Text</label>
            <textarea name="post-text" id="post_text" placeholder="Describe your post..."></textarea>
            <label for="post_subsite">Choose Subsite*</label>
            <input type="text" id="post_subsite" required>
            <label for="post_replies">Options</label>
            <div class="Checkbox-Container">
                <input type="checkbox" id="post_replies">
                <label for="post_replies">Send replies to my inbox</label>
            </div>
            <p>Note: Please be mindful of nuctro's <a href="#">rules</a> before submitting</p>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>