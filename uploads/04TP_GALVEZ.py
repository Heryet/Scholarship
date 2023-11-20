#HANCE HENLEY S. GALVEZ

import signal
import pygame
from pygame.locals import *
from OpenGL.GL import *
from OpenGL.GLU import *

def create_diamond():
    glBegin(GL_TRIANGLES)
    
    #FRONT TOP RIGHT TRIANGLE
    glVertex3f(0, 0, -0.7)
    glVertex3f(0.7, 0, 0)
    glVertex3f(0, 1, 0)
    glColor3ub(255, 105, 97)

    #FRONT LEFT TOP TRIANGLE
    glVertex3f(0, 0, -0.7)
    glVertex3f(-0.7, 0, 0)
    glVertex3f(0, 1, 0)
    glColor3ub(255, 180, 128)
    
    #BACK RIGH TOP TRIANGLE
    glVertex3f(0, 0, 0.7)
    glVertex3f(0.7, 0, 0)
    glVertex3f(0, 1, 0)
    glColor3ub(248, 243, 141)
        
    #BACK LEFT TOP TRIANGLE
    glVertex3f(0, 0, 0.7)
    glVertex3f(-0.7, 0, 0)
    glVertex3f(0, 1, 0)
    glColor3ub(66, 214, 164)
    
    #FRONT RIGHT BOTTOM TRIANGLE
    glVertex3f(0, 0, -0.7)
    glVertex3f(0.7, 0, 0)
    glVertex3f(0, -1, 0)
    glColor3ub(8, 202, 209)
    
    #FRONT LEFT BOTTOM TRIANGLE
    glVertex3f(0, 0, -0.7)
    glVertex3f(-0.7, 0, 0)
    glVertex3f(0, -1, 0)
    glColor3ub(89, 173, 246)
    
    #BACK RIGHT BOTTOM TRIANGLE
    glVertex3f(0, 0, 0.7)
    glVertex3f(0.7, 0, 0)
    glVertex3f(0, -1, 0)
    glColor3ub(157, 148, 255)
    
    #BACK LEFT BOTTOM TRIANGLE
    glVertex3f(0, 0, 0.7)
    glVertex3f(-0.7, 0, 0)
    glVertex3f( 0, -1, 0)
    glColor3ub(199, 128, 232)
    
    glEnd()


def start_main():
    pygame.init()
    screen_size = (850, 650)
    pygame.display.set_mode(screen_size, DOUBLEBUF | OPENGL)
    pygame.display.set_caption("Hance Henley Galvez")

    gluPerspective(45, (screen_size[0] / screen_size[1]), 0.1, 50.0)
    glTranslatef(0.0, 0.0, -6)

    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                signal.raise_signal(signal.SIGINT)
                
            if event.type == pygame.KEYDOWN:
                if event.key == K_UP:  
                    glScale(1.1, 1.1, 1.1)
                    
                if event.key == K_DOWN:
                    glScale(0.9, 0.9, 0.9)

        glRotatef(1, 0, 1, 0)
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT)
        create_diamond()
        pygame.display.flip()
        pygame.time.wait(8)


def clean(signum, frame):
    print("Exiting....")
    pygame.quit()
    exit()


signal.signal(signal.SIGINT, clean)
start_main()
