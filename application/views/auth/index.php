			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				  <h4 class="card-title"><?=lang('user_list')?></h4>
				  <a href="<?php echo "auth/create_user" ?>" class="btn btn-primary">
                      <i class="mdi mdi-account"></i>                      
                      <?=lang('index_create_user_link')?>
				  </a>
				  <a href="<?php echo "auth/create_group" ?>" class="btn btn-primary">
                      <i class="mdi mdi-account"></i>                      
                      <?=lang('index_create_group_link')?>
				  </a>				  
				  <?php if ($this->session->flashdata('message')) : ?>
					<div id="infoMessage" class="alert alert-error card-description">				  
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong><?php echo $message;?></strong>
					</div>
				  <?php endif ?>				  
                  <div class="table-responsive pt-3">				  					   
					<table class="table table-bordered">
						<thead>
						<tr>
							<th><?php echo lang('index_fname_th');?></th>
							<th><?php echo lang('index_lname_th');?></th>
							<th><?php echo lang('index_email_th');?></th>
							<th><?php echo lang('index_groups_th');?></th>
							<th><?php echo lang('index_status_th');?></th>
							<th class="td-actions"><?php echo lang('index_action_th');?></th>							
						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user):?>
							<tr>
								<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
								<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
								<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
								<td>
									<?php foreach ($user->groups as $group):?>
										<?php echo "[". anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')). "]" ;?>
									<?php endforeach?>
								</td>
								<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
								<td class="td-actions"><a href="<?php echo "auth/edit_user/".$user->id; ?>" class="btn btn-small btn-success" title="Edit"><i class="mdi mdi-table-edit"> </i></a></td>
							</tr>
						<?php endforeach;?>				
						</tbody>
					</table>
				  </div>
                </div>
              </div>
            </div>