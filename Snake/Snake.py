from tkinter import *
from random import randrange

################################
## Déclarations des fonctions ##
################################

# Cette fonction va permettre de mettre le serpent en mouvement de manière automatique

def deplacement():
    global dx
    global dy
    global x
    global y
    global eat
    global flag
    global score
    perdu()

    # Le repas du serpent
    if coord_serpent[0] == x and coord_serpent[1] == y:
        can1.delete(pomme)
        eat = 1
        coord = len(coord_serpent)
        scorePlusDix()
        if direction == 1:
            x1 = coord_serpent[coord - 4]
            y1 = coord_serpent[coord - 3]
            x2 = coord_serpent[coord - 2]
            y2 = coord_serpent[coord - 1]

            x1 = x1 + 10
            x2 = x2 + 10
            y2 = y2 + 10

            coord_serpent.append(x1)
            coord_serpent.append(y1)
            coord_serpent.append(x2)
            coord_serpent.append(y2)

            serpent.append(can1.create_rectangle(x1, y1, x2, y2, fill="blue"))
        if direction == 2:
            x1 = coord_serpent[coord - 4]
            y1 = coord_serpent[coord - 3]
            x2 = coord_serpent[coord - 2]
            y2 = coord_serpent[coord - 1]

            x1 = x1 - 10
            x2 = x2 - 10
            y2 = y2 + 10

            coord_serpent.append(x1)
            coord_serpent.append(y1)
            coord_serpent.append(x2)
            coord_serpent.append(y2)

            serpent.append(can1.create_rectangle(x1, y1, x2, y2, fill="yellow"))
        if direction == 3:
            x1 = coord_serpent[coord - 4]
            y1 = coord_serpent[coord - 3]
            x2 = coord_serpent[coord - 2]
            y2 = coord_serpent[coord - 1]

            y1 = y1 + 10
            y2 = y2 + 10

            coord_serpent.append(x1)
            coord_serpent.append(y1)
            coord_serpent.append(x2)
            coord_serpent.append(y2)

            serpent.append(can1.create_rectangle(x1, y1, x2, y2, fill="green"))
        if direction == 4:
            x1 = coord_serpent[coord - 4]
            y1 = coord_serpent[coord - 3]
            x2 = coord_serpent[coord - 2]
            y2 = coord_serpent[coord - 1]

            x2 = x2 + 10
            y2 = y2 - 10

            coord_serpent.append(x1)
            coord_serpent.append(y1)
            coord_serpent.append(x2)
            coord_serpent.append(y2)

            serpent.append(can1.create_rectangle(x1, y1, x2, y2, fill="red"))
        repas()

    # Les coordonnées de chaque carrés vont prendre les coordonées des sepent qui étaient avant

    i = 4
    j = 1

    # Pour faire bouger le serpent, il va créer et supprimé un carré
    while j < len(serpent):
        coord_serpent[len(coord_serpent) - (i)] = coord_serpent[len(coord_serpent) - (i + 4)]
        coord_serpent[len(coord_serpent) - (i - 1)] = coord_serpent[len(coord_serpent) - (i + 3)]
        coord_serpent[len(coord_serpent) - (i - 2)] = coord_serpent[len(coord_serpent) - (i + 2)]
        coord_serpent[len(coord_serpent) - (i - 3)] = coord_serpent[len(coord_serpent) - (i + 1)]
        i += 4
        j += 1

    # On fait avancer le serpent

    coord_serpent[0] = coord_serpent[0] + dx
    coord_serpent[1] = coord_serpent[1] + dy
    coord_serpent[2] = coord_serpent[0] + 10
    coord_serpent[3] = coord_serpent[1] + 10

    i = 0
    j = 0

    if flag != 0:
        while j < len(serpent):
            # On redéfinie les coordonnées de chacun des carré
            # composant le corps du serpent

            can1.coords(serpent[j], coord_serpent[i], coord_serpent[i + 1], coord_serpent[i + 2], coord_serpent[i + 3])

            i += 4
            j += 1

    if flag > 0:
        fen1.after(50, délacement)


# Cette fonction nous permet de créer une pomme dans le cannevas n'importe où

def repas():
    global eat
    global x
    global y
    global pomme
    global coord_serpent
    if eat == 1:
        x = randrange(10, 480, 10)
        y = randrange(10, 280, 10)
        pomme = can1.create_oval(x, y, x + 10, y + 10, fill="green")
        eat = 0


# Fonction qui va nous permettre de faire changer de direction au serpent

def left(event):
    global dx
    global dy
    global direction
    global coord_serpent
    if direction != 2:
        dx = -10
        dy = 0
        direction = 1


def right(event):
    global dx
    global dy
    global direction
    if direction != 1:
        dx = 10
        dy = 0
        direction = 2


def up(event):
    global dx
    global dy
    global direction
    if direction != 4:
        dx = 0
        dy = -10
        direction = 3


def down(event):
    global dx
    global dy
    global direction
    if direction != 3:
        dx = 0
        dy = 10
        direction = 4


# Fonction pour le score

def scorePlusDix():
    global score, scoreTxt
    score += 10
    canTexte.delete(scoreTxt)
    scoreTxt = canTexte.create_text(25, 10, anchor=CENTER, font=("Arial", 15), text=str(score))


# FOnction pour gérer la fin de la partie

def perdu():
    if coord_serpent[
        2] == 500:  # coord_serpent[2] est le 2 ieme élément de la liste serpent donc c'est 50 ( il joue le role de x2 ). quand on va a droite, sa affiche perdu
        txt.set("Tu as perdu..")
        raise Exception("Perdu")
    if coord_serpent[0] == 0:  # meme principe, on va a gauche
        txt.set("Tu as perdu..")
        raise Exception("Perdu")
    if coord_serpent[1] == 0:  # meme principe, on va en haut
        txt.set("Tu as perdu..")
        raise Exception("Perdu")
    if coord_serpent[3] == 300:  # meme principe, on va en bas
        txt.set("Tu as perdu..")
        raise Exception("Perdu")


#########################
## Programme principal ##
#########################

# Définition du canevas (espace de jeu)

fen1 = Tk()
fen1.title("Snake les amis")
can1 = Canvas(fen1, width=500, height=300, bg="white")

# Définition des touches qui permettront de déplacer le serpent

can1.bind_all("<Left>", left)
can1.bind_all("<Right>", right)
can1.bind_all("<Up>", up)
can1.bind_all("<Down>", down)

can1.grid(row=0, column=0, rowspan=10)

# Création des bords

can1.create_line(0, 0, 0, 500, width=14)
can1.create_line(0, 0, 500, 0, width=14)
can1.create_line(500, 0, 500, 500, width=6)
can1.create_line(0, 300, 500, 300, width=6)

# Liste des coordonnées du serpent (initial)

coord_serpent = [30, 30, 60, 60]

# Définition des coordonnées de départ du serpent

serpent = [can1.create_rectangle(coord_serpent[0], coord_serpent[1], coord_serpent[2], coord_serpent[3], fill="red")]

# Création de variables qui vont permettrent de faire manger le serpent ainsi que de le déplacer.

flag = 1
eat = 0

# Création de la première pomme

x = randrange(10, 480, 10)
y = randrange(10, 280, 10)
pomme = can1.create_oval(x, y, x + 10, y + 10, fill="green")

# Pas avancement serpent (dx = déplacement horizontal. dy = déplacement vertical)

dx = 10
dy = 0

# Création du boutton quitter

bouton_quitter = Button(text="Quitter", command=fen1.destroy)
bouton_quitter.grid(row=300, column=0)

# il faut donner une valeur a direction pour pouvoir diriger le snake

direction = 0

# Le score

canTexte = Canvas(fen1, width=50, height=20, bg='red')
canTexte.grid(row=400, column=0)

score = -10
scoreTxt = 0
scorePlusDix()

# Création d'un étiquette qui nous servira aussi pour afficher perdu

txt = StringVar()
etiquette = Label(fen1, textvariable=txt)
etiquette.grid(row=200, column=0)
txt.set("Let's Go !")

deplacement()

fen1.mainloop()
