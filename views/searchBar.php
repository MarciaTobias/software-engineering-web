<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<!-- Creating a main container container with the -->
<div class="container justify-content-right pt-3">
    <!-- Creating a container to the searches fields -->
    <form action="search" method="post" class="d-block d-sm-12 d-lg-flex mb-4">
        <!-- Creating the container of the fields for search -->
        <div class="fields d-block d-lg-flex">
            <!-- creating the text field search first field -->
            <div class="text-field-search one-third"><input type="text" class="form-control" placeholder="Keyword search..."></div>
            <div class="select-wrap one-third">
                <!-- creating the course field, describing some standard course titles -->
                <select id="courseId" class="form-control">
                    <option value="">Course</option>
                    <option value="">General English</option>
                    <option value="">Business English</option>
                    <option value="">Intensive English</option>
                    <option value="">One-to-one</option>
                    <option value="">Others</option>
                </select>
            </div>
            <!-- Creating the cities field, defining the cities of the institutions subscribed -->
            <div class="select-wrap one-third">
                <select id="citiesId" class="form-control">
                    <option value="">All cities</option>
                    <option value="">Dublin</option>
                    <option value="">Cork</option>
                    <option value="">Galway</option>
                    <option value="">Limerick</option>
                    <option value="">Belfast</option>
                </select>
            </div>
            <!-- Creating the level field, defining in which level the user is looking for courses-->
            <div class="select-wrap one-third">
                <select id="levelId" class="form-control">
                    <option value="">Difficulty level</option>
                    <option value="">Beginner</option>
                    <option value="">Intermediate</option>
                    <option value="">Advance</option>
                    <option value="">Proficient</option>
                </select>
            </div>
            <!-- Creating the accommodation field, describing the standard accommodations -->
            <div class="select-wrap one-third">
                <select id="accommodationId" class="form-control">
                    <option value="">Accommodation</option>
                    <option value="">No accommodation</option>
                    <option value="">accommodation lowest</option>
                    <option value="">apartment single</option>
                    <option value="">apartment shared</option>
                    <option value="">homestay</option>
                    <option value="">on campus</option>
                </select>
            </div>
            <!-- Creating the fields to absorb the limit price to the user define in its search-->
            <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Min price €"></div>
            <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Max price €"></div>
        </div>
        <!-- Creating the input search to serve as an action to look for the search stipulated-->
        <input type="submit" class="search-submit btn col-sm-12 col-lg-1 btn-primary" value="Search">
    </form>
</div>
