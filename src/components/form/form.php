<!-- HTML Document -->

<bbn-form :action="root + 'new'"
          :source="formData">
	<div class="bbn-grid-fields bbn-padded">
    <label><?= _("Start") ?></label>
    <div>
      <bbn-datetimepicker></bbn-datetimepicker>
    </div>
  </div>
</bbn-form>