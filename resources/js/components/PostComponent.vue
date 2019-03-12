<template>
    <div>
        <table class="table">
            <tbody>
                <tr class="" v-for="row_data in data">
                    <th class="w-25 text-right">{{ row_data.published_at | moment }}</th>
                    <td class="w-75 text-left">{{ row_data.text }}</td>
                </tr>
            </tbody>
        </table>
        <div class="row mt-2">
            <div class="col-6 text-left">
                <div class="btn btn-light btn-sm" :class="{disabled: current_page <= 1}">
                    <a @click="change(current_page - 1)" class="" aria-label="Previous">
                        <span aria-hidden="true">&larr; Newer Posts</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
            <div class="col-6 text-right">
                <div class="btn btn-light btn-sm" :class="{disabled: current_page >= last_page}">
                    <a @click="change(current_page + 1)" class="" aria-label="Next">
                        <span aria-hidden="true">Older Posts &rarr;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    export default {
        data() {
            return {
                data: [],
                current_page: 1,
                last_page: 1,
                total: 1,
                from: 0,
                to: 0
            }
        },
        methods: {
            getPosts: function(page) {
                axios.get("/api/getPosts?page="+page)
                    .then(response => {
                        this.data = response.data.data;
                        this.current_page = response.data.current_page;
                        this.last_page = response.data.last_page;
                        this.total = response.data.total;
                        this.from = response.data.from;
                        this.to = response.data.to;
                    })
                    .catch(function(error) {
                        this.data = [];
                        alert('Error');
                    });
            },
            change(page) {
                if (page >= 1 && page <= this.last_page) this.getPosts(page)
            },
        },
        mounted: function() {
            this.getPosts(1);
        },
        computed: {
            pages() {
                let start = _.max([this.current_page - 2, 1])
                let end = _.min([start + 5, this.last_page + 1])
                start = _.max([end - 5, 1])
                return _.range(start, end)
            },
        },
        filters: {
            moment: function (date) {
                return moment(date).format('Do MMMM, YYYY');
            }
        }
    };
</script>
