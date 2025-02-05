#======================================================================
# Test get phase
#======================================================================

[Test get: ftb]
module = SCM
scm_module = SVN
scm_url = https://svn.mcs.anl.gov/repos/cifts/ftb/trunk/components
scm_post_copy = <<EOT
./autogen.sh
EOT

#======================================================================                                               
# Test build phase                                                                                                    
#======================================================================                                               
                                                                                                                      
[Test build: ftb]                                                                                                     
test_get = ftb                                                                                                        
save_stdout_on_success = 1                                                                                            
merge_stdout_stderr = 1                                                                                               
stderr_save_lines = 100                                                                                               
                                                                                                                      
module = Shell                                                                                                        
shell_build_command = <<EOT                                                                                           
./configure --with-ftb=&test_prefix_pretty()                                                                          
make                                                                                                                  
EOT                                                                                                                   
                                                                                                                      
#======================================================================                                               
# Test Run phase                                                                                                      
#======================================================================                                               
                                                                                                                      
# Some default Test run parameters to include in (most) Test run sections                                             
[Test run]                                                                                                            
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))                                                             
timeout = &max(30, &multiply(10, &test_np()))                                                                         
save_stdout_on_pass = 1                                                                                               
merge_stdout_stderr = 1                                                                                               
stdout_save_lines = 100                                                                                               
np = &env_max_procs()                                                                                                 
specify_module = Simple                                                                                               
                                                                                                                      
[Test run: ftb]                                                                                                       
include_section = Test run                                                                                            
test_build = ftb                                                                                                      
                                                                                                                      
skipped = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 77)) 

# Similar rationale to the intel test run section                                                                     
simple_pass:tests = &enumerate( \                                                                                     
                    "ftb_eventhandle_example", \                                                                      
                    "ftb_example_callback_unsubscribe", \                                                             
                    "ftb_multiplecomp", \                                                                             
                    "ftb_notify_logger", \                                                                            
                    "ftb_pingpong", \                                                                                 
                    "ftb_polling_logger", \                                                                           
                    "ftb_simple_publisher", \
                    "ftb_simple_subscriber", \
                    "ftb_watchdog")

# Similar rationale to the intel test run section
simple_fail:tests = environment/abort environment/final
simple_fail:pass = &and(&cmd_wifexited(), &ne(&cmd_wexitstatus(), 0))
simple_fail:exclusive = 1
simple_fail:np = &env_max_procs()

#----------------------------------------------------------------------
