<?php
	/* Libchart - PHP chart library
	 * Copyright (C) 2005-2011 Jean-Marc Trémeaux (jm.tremeaux at gmail.com)
	 * 
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 *
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 * 
	 */
	
	/**
	 * Configuration attributes of the chart.
	 *
	 * @author Jean-Marc Trémeaux (jm.tremeaux at gmail.com)
	 */
	class ChartConfig {
		/**
		 * Use several colors for a single data set chart (as if it was a multiple data set).
		 * 
		 * @var Boolean
		 */
		private $useMultipleColor;
		
		/**
		 * Creates a new ChartConfig.
		 */
		public function ChartConfig() {
			$this->useMultipleColor = false;
		}
		
		/**
		 * If true the chart will use several colors for a single data set chart
		 * (as if it was a multiple data set).
		 * 
		 * @param $useMultipleColor Use several colors : boolean
		 */
		public function setUseMultipleColor($useMultipleColor) {
			$this->useMultipleColor = $useMultipleColor;
		}
		
		/**
		 * If true the chart will use several colors for a single data set chart
		 * (as if it was a multiple data set).
		 * 
		 * @return $useMultipleColor Use several colors : boolean
		 */
		public function getUseMultipleColor() {
			return $this->useMultipleColor;
		}
		
	}
?>