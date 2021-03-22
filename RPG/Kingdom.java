import java.util.Scanner;
import java.util.HashMap;

public class Kingdom {

    private HashMap<Integer, HashMap<Integer, City>> map = new HashMap<Integer, HashMap<Integer, City>>();
    private City city;
    private int cityX = 0;
    private int cityY = 0;

    public static Kingdom newGame() {
        Kingdom city = new Kingdom();

        city.putCity(0, 1, City.newCity());
        city.putCity(1, 0, City.newCity2());
        city.putCity(1, 1, City.newCity3());
        city.putCity(-1, -1, City.newCity4());

        city.city = city.getCity(0, 0);
        return city;
    }

    private void putCity(int x, int y, City room) {

        if (!map.containsKey(x)) {
            map.put(x, new HashMap<Integer, City>());
        }
        map.get(x).put(y, room);
    }

    private boolean cityExist(int x, int y) {
        if (!map.containsKey(x)) {
            return false;
        }
        return map.get(x).containsKey(y);
    }

    private City getCity(int x, int y) {
        return map.get(x).get(y);
    }

    public void startGame(Player player) {
        while (player.isAlive()) {
            movePlayer(player);
        }
        player.isAlive();
        System.out.println("Game Over");
    }

    public void movePlayer(Player player) {

        boolean north = cityExist(cityX, cityY + 1);
        boolean south = cityExist(cityX + 1, cityY);
        boolean west = cityExist(cityX + 1, cityY + 1);
        boolean east = cityExist(cityX - 1, cityY - 1);

        System.out.print("Where would you like to go :");
        System.out.print(" North (n)");
        System.out.print(" South (s)");
        System.out.print(" west (w)");
        System.out.print(" east (e)");


        Scanner in = new Scanner(System.in);
        String direction = in.nextLine();
        if ("n".equals(direction) == north) {
            city = getCity(cityX, cityY + 1);
            city.enter(player);
        }
        if ("s".equals(direction) == south) {
            city = getCity(cityX + 1, cityY);
            city.enter(player);
        }
        if ("w".equals(direction) == west) {
            city = getCity(cityX + 1, cityY + 1);
            city.enter(player);
        }
        if ("e".equals(direction) == east) {
            city = getCity(cityX - 1, cityY - 1);
            city.enter(player);
        }
    }
}
