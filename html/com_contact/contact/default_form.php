<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
if (isset($this->error)) :
    ?>
    <div class="contact-error">
        <?php echo $this->error; ?>
    </div>
<?php endif; ?>

<div class="contact-form">
    <form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
        <fieldset>
            <dl>
                <div class="row">
                    <div class="six columns">
                        <dt><?php echo $this->form->getLabel('contact_name'); ?></dt>
                        <dd><?php echo $this->form->getInput('contact_name'); ?></dd>
                    </div>
                    <div class="six columns">
                        <dt><?php echo $this->form->getLabel('contact_email'); ?></dt>
                        <dd><?php echo $this->form->getInput('contact_email'); ?></dd>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <dt><?php echo $this->form->getLabel('contact_subject'); ?></dt>
                        <dd><?php echo $this->form->getInput('contact_subject'); ?></dd>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <dt><?php echo $this->form->getLabel('contact_message'); ?></dt>
                        <dd><?php echo $this->form->getInput('contact_message'); ?></dd>
                    </div>
                </div>
                <?php if ($this->params->get('show_email_copy')) { ?>
                    <ul class="gumbercopy">
                    <li><?php echo $this->form->getLabel('contact_email_copy'); ?></li>
                    <li><?php echo $this->form->getInput('contact_email_copy'); ?></li>
                    </ul>
                <?php } ?>
                <?php //Dynamically load any additional fields from plugins. ?>
                <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
                    <?php if ($fieldset->name != 'contact'): ?>
                        <?php $fields = $this->form->getFieldset($fieldset->name); ?>
                        <?php foreach ($fields as $field): ?>
                            <?php if ($field->hidden): ?>
                                <?php echo $field->input; ?>
                            <?php else: ?>
                                <dt>
                                <?php echo $field->label; ?>
                                <?php if (!$field->required && $field->type != "Spacer"): ?>
                                    <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL'); ?></span>
                                <?php endif; ?>
                                </dt>
                                <dd><?php echo $field->input; ?></dd>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif ?>
                <?php endforeach; ?>
                <div class="row">       
                    <div class="six columns">

                        <dd>
                            <div class="medium default btn"><input type="submit" value="<?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?>" /></div>
                            <input type="hidden" name="option" value="com_contact" />
                            <input type="hidden" name="task" value="contact.submit" />
                            <input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
                            <input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
                            <?php echo JHtml::_('form.token'); ?>
                        </dd>
                    </div>
                </div>
            </dl>
        </fieldset>
    </form>
</div>
