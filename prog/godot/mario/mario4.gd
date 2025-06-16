extends CharacterBody2D

# Beállítások
@export var speed = 300.0
@export var jump_force = -600.0
@export var gravity = 1500.0

func _physics_process(delta):
	# Gravitáció alkalmazása
	if not is_on_floor():
		velocity.y += gravity * delta

	# Oldalirányú mozgás (balra/jobbra)
	var direction = Input.get_axis("ui_left", "ui_right")
	if direction:
		velocity.x = direction * speed
	else:
		velocity.x = move_toward(velocity.x, 0, speed) # Lassú megállás

	# Ugrás
	if Input.is_action_just_pressed("ui_up") and is_on_floor():
		velocity.y = jump_force

	# Mozgás alkalmazása
	move_and_slide()
