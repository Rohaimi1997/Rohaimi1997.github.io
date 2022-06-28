<li class="nav-item nav-item-submenu <?php echo e(in_array(Route::currentRouteName(), ['students.list', 'students.edit', 'students.show']) ? 'nav-item-expanded' : ''); ?>">
                                <a href="#" class="nav-link <?php echo e(in_array(Route::currentRouteName(), ['students.list', 'students.edit', 'students.show']) ? 'active' : ''); ?>"><i class="icon-people"></i>Student Information</a>
                                <ul class="nav nav-group-sub">
                                    <?php $__currentLoopData = App\Models\MyClass::orderBy('name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item"><a href="<?php echo e(route('students.list', $c->id)); ?>" class="nav-link "><?php echo e($c->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('exams.index')); ?>"
                                   class="nav-link <?php echo e((Route::is('exams.index')) ? 'active' : ''); ?>"><i class="icon-book"></i>Test List</a>
                            </li>

                       <?php /**PATH C:\xampp\htdocs\fyp\resources\views/pages/counsellor/menu.blade.php ENDPATH**/ ?>