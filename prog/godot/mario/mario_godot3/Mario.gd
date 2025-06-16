extends KinematicBody2D

# Beállítások
export var speed = 300
export var jump_force = -600
export var gravity = 1500
export var friction = 0.2  # Súrlódás a megálláshoz

var velocity = Vector2.ZERO

func _physics_process(delta):
	# 1. Gravitáció alkalmazása
	if not is_on_floor():
		velocity.y += gravity * delta
	
	# 2. Oldalirányú mozgás (balra/jobbra)
	var direction = Input.get_action_strength("ui_right") - Input.get_action_strength("ui_left")
	velocity.x = direction * speed
	
	# 3. Súrlódás (simább megállás)
	if direction == 0:
		velocity.x = lerp(velocity.x, 0, friction)
	
	# 4. Ugrás (csak a földről)
	if Input.is_action_just_pressed("ui_up") and is_on_floor():
		velocity.y = jump_force
	
	# 5. Mozgás alkalmazása
	velocity = move_and_slide(velocity, Vector2.UP)
