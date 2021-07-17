#include <iostream>
#include <vector>
#include <SFML/Graphics.hpp>
#include <SFML/Window.hpp>
#include <SFML/System.hpp>

using namespace std;
using namespace sf;

int main()
{
    RenderWindow window(VideoMode(800, 800), "Simple Game");

    CircleShape ball;
    ball.setFillColor(Color::Red);
    ball.setRadius(5.f);

    RectangleShape enemy;
    enemy.setFillColor(Color::Green);
    enemy.setSize(Vector2f(50.f, 50.f));

    CircleShape player;
    player.setFillColor(Color::Yellow);
    player.setRadius(50.f);
    player.setPosition(window.getSize().x / 2 - player.getRadius(), window.getSize().y - player.getRadius() * 2 - 10.f);

    Vector2f playerCenter;
    int shootTime = 0;

    vector<CircleShape> balls;
    balls.push_back(CircleShape(ball));

    vector<RectangleShape> enemies;
    enemies.push_back(RectangleShape(enemy));

    int enemySpawnTimer = 0;


    while(window.isOpen()) {
        Event event;
        while(window.pollEvent(event)) {
            if(event.type == Event::Closed || Keyboard::isKeyPressed(Keyboard::Escape)) {
                window.close();
            }
        }

        playerCenter = Vector2f(player.getPosition().x + player.getRadius(), player.getPosition().y + player.getRadius());

        player.setPosition(Mouse::getPosition(window).x, player.getPosition().y);


        if(shootTime < 20) {
            shootTime++;
        }

        if(Mouse::isButtonPressed(Mouse::Left) && shootTime >= 20) {
            ball.setPosition(playerCenter);
            balls.push_back(CircleShape(ball));

            shootTime = 0;
        }

        for(size_t i = 0; i< balls.size(); i++) {
            balls[i].move(0.f, -10.f);

            if(balls[i].getPosition().y <= 0) {
                balls.erase(balls.begin() + 1);
            }
        }

        
        if(enemySpawnTimer < 1000) 
            enemySpawnTimer++;

        if(enemySpawnTimer >= 1000) {
            enemy.setPosition((rand() % int(window.getSize().x - enemy.getSize().x)), 0.f);
            enemies.push_back(RectangleShape(enemy));
            enemySpawnTimer = 0;
        }

        for(size_t i =0; i<enemies.size(); i++) {
            enemies[i].move(0.f, 0.1f);

            if(enemies[i].getPosition().y > window.getSize().y - 20)
                enemies.erase(enemies.begin() + i);
        }


        for(size_t i = 0; i< balls.size(); i++) {
            for(size_t k = 0; k < enemies.size(); k++) {
                if(balls[i].getGlobalBounds().intersects(enemies[k].getGlobalBounds())) {
                    balls.erase(balls.begin() + k);
                    break;
                }
            }
        }

        window.clear(Color::White);
        window.draw(player);

        for(size_t i = 0; i < enemies.size(); i++) {
            window.draw(enemies[i]);
        }

        for(size_t i = 0; i < balls.size(); i++) {
            window.draw(balls[i]);
        }

        

        window.display();
    }
}