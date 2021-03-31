<template>
    <div>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form v-on:submit.prevent="saveForm()">
                            <div class="col-xs-12 form-group">
                                <label class="control-label">Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-12 form-group">
                                <label class="control-label">Description</label>
                                <input type="text" class="form-control">
                            </div>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {

        }
    }
</script>
