<?php
if($_SESSION['login'] !== 1){
    header('Location: Frontpage');
}
?>

<div class="sub-header">
            <h1><a href="/"><img src="../img/logo/logo_full.svg" alt="Logo"></a></h1><a href="Create"><p>Create a Subsite</p></a>
        </div>
        <nav class="sort-nav">
            <ul>
                <li>Create your own Subsite</li>
            </ul>
        </nav>
        <form id="create_subsite">
            <div class="create_subsite_general">
                <h2>General</h2>
                <hr>
                <label for="subsite_name" class="block_label">Subsite Name</label>
                <p>This is the name of your subsite, this can't be changed later! No spaces allowed!</p>
                <input type="text" id="subsite_name">
                <label for="subsite_title" class="block_label">Subsite Title</label>
                <p>This text will show up on the tab of your browser window.</p>
                <input type="text" id="subsite_title">
                <label for="subsite_language" class="block_label">Language</label>
                <select id="subsite_language">
                    <option value="en">English</option>
                    <option value="de">German</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                    <option value="it">Italian</option>
                </select><br>
                <label class="block_label">Subsite Type</label>
                <input type="radio" name="subsite_type" value="public" id="subsite_type_public" checked><label for="subsite_type_public" class="radio_label">Public</label><i>Anyone can view & submit on this Subsite</i><br>
                <input type="radio" name="subsite_type" value="restricted" id="subsite_type_restricted"><label for="subsite_type_restricted" class="radio_label">Restricted</label><i>Anyone can view, but only chosen Users can submit</i><br>
                <input type="radio" name="subsite_type" value="private" id="subsite_type_private"><label for="subsite_type_private" class="radio_label">Private</label><i>Only chosen users can view & submit</i><br>
                <label class="block_label">Options</label>
                <input type="checkbox" value="show" id="subsite_options_show" checked><label for="subsite_options_show" class="check_label">Show this Subsite on the Frontpage</label><br>
                <input type="checkbox" value="thumbnails" id="subsite_options_thumbnails" checked><label for="subsite_options_thumbnails" class="check_label">Show Thumbnails from Links</label><br>
                <input type="checkbox" value="upload" id="subsite_options_upload" checked><label for="subsite_options_upload" class="check_label">Allow data uploads</label><br>
                <input type="checkbox" value="nsfw" id="subsite_options_nsfw"><label for="subsite_options_nsfw" class="check_label">NSFW (Not Safe For Work)</label><br>
            </div>
            <div class="create_subsite_sidebar">
                <h2>Sidebar</h2>
                <hr>
                <label for="sidebar_text" class="block_label">Sidebar Text</label>
                <p>This Text appears on top of your Sidebar, use it to describe your subsite.</p>
                <textarea id="sidebar_text" placeholder=""></textarea>
                <label for="sidebar_rules" class="block_label">Sidebar Rules</label>
                <p>Set Rules for your subsite.</p>
                <textarea id="sidebar_rules" placeholder=""></textarea>
                <label for="sidebar_mods" class="block_label">Moderators</label>
                <p>Choose Moderators for your Subsite.</p>
                <input type="text" id="sidebar_mods">
                <br>
                <input type="submit" value="Create your Subsite">
            </div>
        </form>
