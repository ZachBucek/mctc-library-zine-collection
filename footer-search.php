<footer class="row">
    <hr id="footer-rule">
    <div class="twelve columns">
        <div class="footer-main">

            <!--MCTC-->
            <div class="footer-links">
                <h2>MCTC</h2>
                <p><a target="_blank" href="https://www.minneapolis.edu">MCTC Homepage</a></p>
                <p><a target="_blank" href="https://minneapolis.learn.minnstate.edu">D2L</a></p>
                <p><a target="_blank" href="http://www.outlook.com/go.minneapolis.edu">Email</a></p>
            </div>

            <!--LIBRARY-->
            <div class="footer-links">
                <h2>LIBRARY</h2>
                <p><a target="_blank" href="http://library.minneapolis.edu">Library Homepage</a></p>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/hours.html">Hours</a></p>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/find_resources.html">Find Resources</a></p>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/ask_a_librarian.html">Ask a Librarian</a></p>
            </div>

            <!--CONTACT-->
            <div class="footer-links">
                <h2>CONTACT</h2>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/contact_us.html">Questions</a></p>
                <p><a target="_blank" href="tel:612-659-6290">612-659-6290</a></p>
                <p><a target="_blank" href="mailto:circdesk@minneapolis.edu">Email</a></p>
            </div>

        </div>
        <!--END OF FOOTER LINKS-->

        <hr id="footer-rule-mobile">

        <!--ADDRESS & COPYRIGHT-->
        <div id="address-copyright">
            <a href="https://goo.gl/maps/zRkP6WbbnZE2" target="_blank"><p id="address">1501 Hennepin Ave<br>Minneapolis, MN 55403<br>612-659-6000</p></a>
            <p id="copyright">&copy;<?php echo date("Y"); ?> Minneapolis Community<br>& Technical College</p>
        </div>

        <!--BACK-TO-TOP-->
        <div>
            <a href="#top" class="back-to-top">^</a>
        </div>

    </div>
    <!--END OF TWELVE COLUMNS-->

</footer>
</div>
<!--END CONTAINER-->

<!--DATATABLES JS CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>

<!--INLINE STYLES-->
<!--SEARCH FORM-->
<style>
    .static-page-search .pagination>li {
        display: inline-flex;
    }

    .static-page-search .ui-button {
        padding: 0;
        margin-right: 0;
        border: none;
    }

    .static-page-search .btn {
        background-color: #A214CC;
        color: white;
    }

    .static-page-search .form-control:focus {
        border-color: #75ffca;
        box-shadow: none;
    }
    /* DATATABLES OVERRIDE */
    .form-control,
    #zine_container,
    .zineID {
        font-size: 18px !important;
    }

    .zineTitle,
    .zineDate,
    .zineIssue {
        font-size: 18px !important;
    }

    .zineTitle:hover,
    .zineDate:hover,
    .zineIssue:hover {
        text-decoration: underline !important;
        cursor: pointer !important;
        color: #A214CC !important;
    }

    .table-bordered>tbody>tr>td:focus,
    .table-bordered>tbody>tr>td:active {
        color: #ffb200 !important;
    }

    .pagination>li>a {
        color: #A214CC !important;
    }

    .pagination>.active>a,
    .pagination>.active>a:hover {
        background-color: #A214CC !important;
        border-color: #A214CC !important;
        color: #fff !important;
    }

    div.dataTables_info {
        padding-bottom: 30px !important;

    }

</style>

<!--BACK TO TOP-->
<style>
    .back-to-top {
        position: fixed;
        color: black;
        text-decoration: none;
        display: none;
        background-color: gainsboro;
    }

    .back-to-top:hover {
        background-color: #ffb200;
        color: white;
    }

    .back-to-top a:visited {
        background-color: gainsboro;
        color: black;
    }

    .back-to-top p {
        margin: 0;
        padding: 0;
    }

    .back-to-top {
        bottom: 0;
        right: .5em;
        font-size: 28px;
        padding: 0 8px 0 8px;
    }
</style>

<!--FOOTER-->
<style>
    footer {
        font-family: Abel, sans-serif;
        clear: both;
        width: 100%;
        display: block;
        margin-bottom: 60px;
        padding: 0;
    }

    footer a {
        color: #A214CC;
    }

    footer a:hover {
        text-decoration: underline;
        color: #A214CC;
    }

    #footer-rule {
        border: solid 2px #ffb200;
    }

    footer p {
        margin-bottom: 1.5rem;
        font-size: 18px;
    }

    footer h2 {
        font-size: 21px;
        color: black;
    }

    #footer-rule-mobile {
        display: none;
    }
</style>

<!--DATATABLES SCRIPTS / API CALLS-->
<script type="text/javascript">
    $(document).ready(function() {

        $("input").bind("keydown", function(event) {
            // track enter key
            var keycode = (event.keyCode ? event.keyCode : (event.which ? event.which : event.charCode));
            if (keycode == 13) { // keycode for enter key
                // force the 'Enter Key' to implicitly click the Update button
                document.getElementById('defaultButton').click();
                return false;
            } else  {
                return true;
            }
        }); // end of function

    });

    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    var first = getUrlVars()["title"];


    function alerter(zine) {

        var query2 = 'SELECT * FROM 1w5n6iBVL7q8TQ4cN3_VNVmQ9-r_mB3zgtNY5gK0 WHERE Identifier CONTAINS IGNORING CASE \'' + zine + '\'';
        var encodedQuery2 = encodeURIComponent(query2);


        var url2 = ['https://www.googleapis.com/fusiontables/v2/query'];
        url2.push('?sql=' + encodedQuery2);
        url2.push('&key=AIzaSyCQvJFm-EZaW9J3u65EHvZhlZVck5YrLh8');
        url2.push('&callback=?');

        $('#zine').empty();


        $.ajax({
            url: url2.join(''),
            dataType: 'jsonp',
            success: function (data) {
                var rows = data['rows'];

                var zine = document.getElementById('zine');


                var zineElement = document.createElement('ul');
                zineElement.className = 'zineClass list-unstyled';
                zineElement.id = 'zineID';
                if (rows[0][2] != ''){
                    var zineTitle = document.createElement('li');
                    zineTitle.innerHTML = '<span class="zineField">Title:</span> <a href="#" onclick="reinitialize(\'Title\', \'' + escape(rows[0][2]) + '\')">' + rows[0][2] + '</a>';
                    zineElement.appendChild(zineTitle);
                }

                if (rows[0][1] != ''){
                    var zineAuthor = document.createElement('li');
                    zineAuthor.innerHTML = '<span class="zineField">Creator:</span> <a href="#" onclick="reinitialize(\'Creator\', \'' + rows[0][1] + '\')">' + rows[0][1] + '</a>';
                    zineElement.appendChild(zineAuthor);
                }
                if (rows[0][12] != ''){
                    var zineNotes = document.createElement('li');
                    zineNotes.innerHTML = '<span class="zineField">Publisher:</span> ' + rows[0][12];
                    zineElement.appendChild(zineNotes);
                }
                if (rows[0][3] != ''){
                    var zinePlace = document.createElement('li');
                    zinePlace.innerHTML = '<span class="zineField">Place of Publication:</span> <a href="#" onclick="reinitialize(\'Place of Publication\', \'' + rows[0][3] + '\')">' + rows[0][3] + '</a>';
                    zineElement.appendChild(zinePlace);
                }

                if (rows[0][4] != ''){
                    var zineDate = document.createElement('li');
                    zineDate.innerHTML = '<span class="zineField">Date Created:</span> ' + rows[0][4];
                    zineElement.appendChild(zineDate);
                }

                if ((rows[0][5] != '') && (isNaN(rows[0][5]) == false)){
                    var zineVolume = document.createElement('li');
                    zineVolume.innerHTML = '<span class="zineField">Volume:</span> ' + rows[0][5].toString();
                    zineElement.appendChild(zineVolume);
                }

                if ((rows[0][6] != '') && (isNaN(rows[0][6]) == false)){
                    var zineIssue = document.createElement('li');
                    zineIssue.innerHTML = '<span class="zineField">Issue:</span> ' + rows[0][6];
                    zineElement.appendChild(zineIssue);
                }
                if (rows[0][14] != ''){
                    var zineSubject = document.createElement('li');
                    zineSubject.innerHTML = '<span class="zineField">Medium:</span> ' + rows[0][14];
                    zineElement.appendChild(zineSubject);
                }
                if (rows[0][7] != ''){
                    var zinePages = document.createElement('li');
                    zinePages.innerHTML = '<span class="zineField">Extent of Work:</span> ' + rows[0][7];
                    zineElement.appendChild(zinePages);
                }
                if (rows[0][13] != ''){
                    var zineSubject = document.createElement('li');
                    zineSubject.innerHTML = '<span class="zineField">Dimensions:</span> ' + rows[0][13];
                    zineElement.appendChild(zineSubject);
                }
                if (rows[0][11] != ''){
                    var zineSubject = document.createElement('li');
                    zineSubject.innerHTML = '<hr><span class="zineField">Table of Contents:</span> ' + rows[0][11] + '<hr>';
                    zineElement.appendChild(zineSubject);
                }
                if (rows[0][8] != ''){
                    var zineWebsite = document.createElement('li');
                    zineWebsite.innerHTML = '<span class="zineField">Description:</span> ' + rows[0][8] ;
                    zineElement.appendChild(zineWebsite);
                }
                if (rows[0][16] != ''){
                    var zineSubject = document.createElement('li');
                    zineSubject.innerHTML = '<span class="zineField">Genre:</span> ' + rows[0][16];
                    zineElement.appendChild(zineSubject);
                }
                if (rows[0][10] != ''){
                    var zineSubject = document.createElement('li');
                    zineSubject.innerHTML = '<span class="zineField">Subject(s):</span> ' + rows[0][10];
                    zineElement.appendChild(zineSubject);
                }
                if (rows[0][9] != ''){
                    var zineNotes = document.createElement('li');
                    zineNotes.innerHTML = '<span class="zineField">Abstract:</span> ' + rows[0][9];
                    zineElement.appendChild(zineNotes);
                }
                if (rows[0][15] != ''){
                    var zineSubject = document.createElement('li');
                    zineSubject.innerHTML = '<span class="zineField">Rights Statement:</span> ' + rows[0][15];
                    zineElement.appendChild(zineSubject);
                }
                zine.appendChild(zineElement);
            }

        });
        $('#zine_container').show();
    }

    function initialize( ) {

        var searchTerm = document.getElementById('searchT').value;
        var fieldTerm = document.getElementById('fieldT').value;

        var query = 'SELECT Title, \'Date Created\', Identifier, Issue FROM 1w5n6iBVL7q8TQ4cN3_VNVmQ9-r_mB3zgtNY5gK0 WHERE \'' + fieldTerm + '\' CONTAINS IGNORING CASE \'' + searchTerm + '\'';
        var encodedQuery = encodeURIComponent(query);


        // Construct the URL
        var url = ['https://www.googleapis.com/fusiontables/v2/query'];
        url.push('?sql=' + encodedQuery);
        url.push('&key=AIzaSyCQvJFm-EZaW9J3u65EHvZhlZVck5YrLh8');
        url.push('&callback=?');

        //empty the div
        $('#zine_container').hide();
        $('#zine').empty();
        $('#dynamic').empty();
        $('#zineCovers').empty();

        // Send the JSONP request using jQuery
        $.ajax({
            url: url.join(''),
            dataType: 'jsonp',
            success: function (data) {
                var rows = data['rows'];
                if (rows == null){
                    var notFound = document.getElementById('dynamic');
                    /*var notFoundMessage = document.createElement('span');
                     notFoundMessage.innerHTML = 'There were no matches';
                     notFound.appendChild(notFoundMessage);*/
                    var notFoundMessage = document.createElement('div');
                    notFoundMessage.className = 'notFoundClass';
                    notFoundMessage.innerHTML = 'No results were found, please try searching again.';
                    notFound.appendChild(notFoundMessage);
                }

                else {
                    $('#dynamic').html( '<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"></table>' );
                    $('#example').dataTable( {

                        // SCROLL EXTENSION
                        "scrollY":        "200px",
                        "scrollCollapse": true,
                        "paging":         false,

                        "aaData": rows,
                        "bJQueryUI": true,
                        "bFilter": false,
                        "bLengthChange": false,
                        /*"aaSorting": [[ 1, "desc" ]],*/
                        "sPaginationType": "simple_numbers",
                        "aoColumns": [
                            { "sTitle": "Title" },
                            { "sTitle": "Date" },
                            { "sTitle": "ID"},
                            { "sTitle": "Issue"}
                        ],
                        "aoColumnDefs": [{
                            "fnRender": function ( oObj, sVal ) {
                                /*return sVal +' '+ oObj.aData[3];*/
                                if (isNaN(sVal) == true){
                                    sVal = '';
                                }
                                return sVal;
                            },
                            "aTargets": [ 3 ]
                        },
                            { "sClass": "zineID", "aTargets": [ 2 ]}, {"sClass": "zineTitle", "aTargets": [ 0 ]}, {"sClass": "zineDate", "aTargets": [ 1 ]}, {"sClass": "zineIssue", "aTargets": [ 3 ]}]

                    } );

                    /* Init DataTables */
                    var oTable = $('#example').dataTable();

                    $( oTable.fnGetNodes() ).click(function() {
                        var sBrowser = $(this).find("td").eq(2).text();
                        alerter(sBrowser);
                    });
                }
            }
        });
    }


    function reinitialize(field, term) {
        var searchTerm = unescape(term);
        var fieldTerm = field;
        document.getElementById('searchT').value = searchTerm;
        document.getElementById('fieldT').value = fieldTerm;
        var query = 'SELECT Title, \'Date Created\', Identifier, Issue FROM 1w5n6iBVL7q8TQ4cN3_VNVmQ9-r_mB3zgtNY5gK0 WHERE \'' + fieldTerm + '\' CONTAINS IGNORING CASE \'' + searchTerm + '\'';
        var encodedQuery = encodeURIComponent(query);
        // Construct the URL
        var url = ['https://www.googleapis.com/fusiontables/v2/query'];
        url.push('?sql=' + encodedQuery);
        url.push('&key=AIzaSyCQvJFm-EZaW9J3u65EHvZhlZVck5YrLh8');
        url.push('&callback=?');

        //empty the div
        $('#zine_container').hide();
        $('#zine').empty();
        $('#dynamic').empty();
        $('#zineCovers').empty();

        // Send the JSONP request using jQuery
        $.ajax({
            url: url.join(''),
            dataType: 'jsonp',
            success: function (data) {
                var rows = data['rows'];
                if (rows == null){
                    var notFound = document.getElementById('dynamic');
                    /*var notFoundMessage = document.createElement('span');
                     notFoundMessage.innerHTML = 'There were no matches';
                     notFound.appendChild(notFoundMessage);*/
                    var notFoundMessage = document.createElement('div');
                    notFoundMessage.className = 'notFoundClass';
                    notFoundMessage.innerHTML = 'No results were found, please try searching again.';
                    notFound.appendChild(notFoundMessage);
                }
                else {
                    $('#dynamic').html( '<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered table-hover" id="example"></table>' );
                    $('#example').dataTable( {
                        "aaData": rows,
                        "bJQueryUI": true,
                        "bFilter": false,
                        "bLengthChange": false,
                        /*"aaSorting": [[ 1, "desc" ]],*/
                        "sPaginationType": "full_numbers",
                        "aoColumns": [
                            { "sTitle": "Title" },
                            { "sTitle": "Date" },
                            { "sTitle": "ID"},
                            { "sTitle": "Issue"}
                        ],
                        "aoColumnDefs": [{
                            "fnRender": function ( oObj, sVal ) {
                                /*return sVal +' '+ oObj.aData[3];*/
                                if (isNaN(sVal) == true){
                                    sVal = '';
                                }
                                return sVal;
                            },
                            "aTargets": [ 3 ]
                        },
                            { "sClass": "zineID", "aTargets": [ 2 ]}, {"sClass": "zineTitle", "aTargets": [ 0 ]}, {"sClass": "zineDate", "aTargets": [ 1 ]}, {"sClass": "zineIssue", "aTargets": [ 3 ]}]

                    } );

                    /* Init DataTables */
                    var oTable = $('#example').dataTable();

                    $( oTable.fnGetNodes() ).click(function() {
                        var sBrowser = $(this).find("td").eq(2).text();
                        alerter(sBrowser);
                    });
                }
            }
        });
    }
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/disclosure.js"></script>

<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117683369-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117683369-1');
</script>
</body>
</html>