<template>
    <app-layout title="Purchases">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Purchase</h2>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"> <i class="material-icons">receipt</i> <b> Purchase Entry</b></a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="material-icons">info_outline</i> <b> Purchase History</b></a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="material-icons">donut_large</i> <b> Report</b></a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                       <Purchase/>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                       <manage/>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                      <report/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
import Purchase from '@/Pages/Admin/purchase/Purchase_info.vue'
import manage from '@/Pages/Admin/purchase/manage_purchase.vue'
import report from '@/Pages/Admin/purchase/purchase_report.vue'
    export default defineComponent({
        components: {
            AppLayout,
            Purchase,
            manage,
            report,
        },
        data: function() {
                return {
                tabs: ["Purchase", "manage","report"],
                selected: "Purchase"
                };
  },
    })
</script>

